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

	public function article($category_slug,$slug)
	{
		$filters = [
			['name' => 'enabled', 'value' => 1],
			['name' => 'category_slug', 'value' => $category_slug],
			['name' => 'slug', 'value' => $slug],
		];
		dd($filters);
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
}