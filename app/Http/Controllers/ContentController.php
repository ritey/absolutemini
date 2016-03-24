<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Repositories\ContentRepositoryInterface;
use CoderStudios\Repositories\CategoryRepositoryInterface;
use CoderStudios\Requests\ContentRequest;
use App;
use Illuminate\Contracts\Cache\Repository as Cache;

class ContentController extends Controller {

	public function __construct(Cache $cache, ContentRepositoryInterface $content, CategoryRepositoryInterface $category)
	{
		$this->content = $content;
		$this->category = $category;
		$this->cache = $cache;
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
		$content = $this->content->orderBy('updated_at','DESC')->paginate(10);
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
		if ($this->cache->has($slug)) {
			$content = $this->cache->get($slug);
		} else {
			$content = $this->content->filterAll($filters);
			if ($content->count()) {
				$content = $content->first();
			} else {
				App::Abort(404);
			}
			$this->cache->put($slug,$content,60);
		}

		return view('pages.content_show',compact('content'));
	}

	public function edit($id)
	{
		$content = $this->content->find($id);
		$categories = $this->category->where('enabled','1')->lists('name','id');

		if (!$content->count()) {
			App::Abort(404);
		}
		return view('admin.content_edit',compact('content','categories'));
	}

	public function update(ContentRequest $request, $id)
	{
		$this->content->updateWithIdAndInput($id,$request->only(
		'enabled',
		'slug',
		'name',
		'category_id',
		'page_title',
		'meta_description',
		'summary',
		'content'));
		$this->cache->flush();
		return redirect()->route('admin.content.index');
	}

	public function create()
	{
		$content = $this->content->getNew();
		$categories = $this->category->all()->pluck('name','id');
		$this->cache->flush();

		return view('admin.content_new',compact('content','categories'));
	}

	public function store(ContentRequest $request)
	{
		$this->content->create($request->all());
		$this->cache->flush();
		return redirect()->route('admin.content.index');
	}
}