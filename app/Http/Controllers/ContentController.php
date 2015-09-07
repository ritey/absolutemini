<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Repositories\ContentRepositoryInterface;
use CoderStudios\Requests\ContentRequest;
use App;
use Cache;

class ContentController extends Controller {

	public function __construct(ContentRepositoryInterface $content)
	{
		$this->content = $content;
	}

	public function index()
	{
		$filters = [
			['name' => 'enabled', 'value' => 1],
			['name' => 'content_group', 'value' => 'article']
		];
		$content = $this->content->filterAll($filters);
		$content = $this->content->order($content,'created_at','DESC');
		$content = $content->get();
		return view('pages.content_index',compact('content'));
	}

	public function adminIndex()
	{
		$filters = [
			['name' => 'content_group', 'value' => 'article']
		];
		$content = $this->content->filterAll($filters);
		$content = $this->content->order($content,'created_at','DESC');
		$content = $content->get();
		return view('admin.content_index',compact('content'));
	}

	public function showtemp()
	{
		$slug = 'matched-betting';
		$filters = [
			['name' => 'enabled', 'value' => 1],
			['name' => 'slug', 'value' => $slug],
		];
		$content = $this->content->filterAll($filters);

		if ($content->count()) {
			$content = $content->first();
		} else {
			App::Abort(404);
		}
		return view('pages.content_show',compact('content'));
	}

	public function show($slug)
	{
		$filters = [
			['name' => 'enabled', 'value' => 1],
			['name' => 'slug', 'value' => $slug],
		];
		if (Cache::has($slug)) {
			$content = Cache::get($slug);
		} else {
			$content = $this->content->filterAll($filters);
			if ($content->count()) {
				$content = $content->first();
			} else {
				App::Abort(404);
			}
			Cache::put($slug,$content,60);
		}

		return view('pages.content_show',compact('content'));
	}

	public function edit($id)
	{
		$content = $this->content->find($id);

		if (!$content->count()) {
			App::Abort(404);
		}
		return view('admin.content_edit',compact('content'));
	}

	public function update(ContentRequest $request, $id)
	{
		$this->content->updateWithIdAndInput($id,$request->only(
		'enabled',
		'user_id',
		'slug',
		'content_group',
		'thumbnail',
		'name',
		'page_title',
		'meta_description',
		'summary',
		'content'));
		return redirect()->route('admin.content.index');
	}

	public function create()
	{
		$content = $this->content->getNew();
		return view('admin.content_new',compact('content'));
	}

	public function store(ContentRequest $request)
	{
		$this->content->create($request->all());
		return redirect()->route('admin.content.index');
	}
}