<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Repositories\ContentRepositoryInterface;
use CoderStudios\Repositories\CategoryRepositoryInterface;
use Request;
use Illuminate\Contracts\Cache\Repository as Cache;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	public function __construct(ContentRepositoryInterface $content, CategoryRepositoryInterface $category, Cache $cache)
	{
		$this->content = $content;
		$this->category = $category;
		$this->cache = $cache;
	}

	/**
	 * Show the homepage.
	 *
	 * @return Response
	 */
	public function index()
	{

        $key = snake_case(class_basename($this) . '_' . __function__);

        if ($this->cache->has($key)) {
            $view = $this->cache->get($key);
        } else {

			$category = Request::input('bmw_mini');
			if (!empty($category)) {
				switch($category) {
					case 4: $category = 'mini-engine'; break;
					case 2: $category = 'mini-general'; break;
					case 6: $category = 'mini-body'; break;
					case 7: $category = 'mini-suspension'; break;
					case 8: $category = 'mini-general'; break;
					case 9: $category = 'mini-general'; break;
					case 10: $category = 'mini-general'; break;
				}
				return redirect()->route('category',$category);
			}

			$categories = $this->category->where('enabled','1')->get();
			$view = view('pages.home', compact('categories'))->render();

        	$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}

	public function error404()
	{
		return view('errors.404');
	}
}
