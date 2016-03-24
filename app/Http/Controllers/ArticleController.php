<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Repositories\ContentRepositoryInterface;
use CoderStudios\Repositories\CategoryRepositoryInterface;
use CoderStudios\Requests\ContentRequest;
use App;
use Illuminate\Contracts\Cache\Repository as Cache;

class ArticleController extends Controller {

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

	public function category($category_id)
	{
        $key = snake_case(class_basename($this) . '_' . __function__ . '_' . $category_id);

        if ($this->cache->has($key)) {
            $view = $this->cache->get($key);
        } else {
			$category = $this->category->where('slug',$category_id)->first();
			if (is_object($category)) {
				$articles = $this->content->where('category_id',$category->id)->where('enabled','1')->paginate(15);
				$view = view('pages.category',compact('articles','category'))->render();
			} else {
				return redirect()->route('404');
			}
        	$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}

	public function article($category_slug,$slug)
	{
        $key = snake_case(class_basename($this) . '_' . __function__ . '_' . $category_slug . '_' . $slug);

        if ($this->cache->has($key)) {
            $view = $this->cache->get($key);
        } else {

			$category = $this->category->where('slug',$category_slug)->first();
			$filters = [
				['name' => 'enabled', 'value' => 1],
				['name' => 'slug', 'value' => $slug],
			];
			if (is_object($category)) {
				$category_id = $category->id;
				$filters[] = ['name' => 'category_id', 'value' => $category_id];
			}
			if ($this->cache->has($slug)) {
				$content = $this->cache->get($slug);
			} else {
				$content = $this->content->filterAll($filters);
				if ($content->count()) {
					$content = $content->first();
				} else {
					return redirect()->route('404');
				}
				$this->cache->put($slug,$content,60);
			}
			$content->category = $category;

			$view = view('pages.content_show',compact('content'))->render();
		}
		return $view;
	}
}