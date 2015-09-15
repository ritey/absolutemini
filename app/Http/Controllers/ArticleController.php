<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Repositories\ContentRepositoryInterface;
use CoderStudios\Repositories\CategoryRepositoryInterface;
use CoderStudios\Requests\ContentRequest;
use App;
use Cache;

class ArticleController extends Controller {

	public function __construct(ContentRepositoryInterface $content, CategoryRepositoryInterface $category)
	{
		$this->content = $content;
		$this->category = $category;
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

	public function category($category_id)
	{
		$category = $this->category->where('slug',$category_id)->first();
		$articles = $this->content->where('category_id',$category->id)->get();
		return view('pages.category',compact('articles','category'));
	}

	public function article($category_slug,$slug)
	{
		$category_id = $this->category->where('slug',$category_slug)->pluck('id');
		$filters = [
			['name' => 'enabled', 'value' => 1],
			['name' => 'category_id', 'value' => $category_id],
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
}