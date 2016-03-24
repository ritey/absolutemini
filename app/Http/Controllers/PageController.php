<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Illuminate\Contracts\Cache\Repository as Cache;

class PageController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Page Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	protected $client;

	public function __construct(Cache $cache)
	{
		$this->cache = $cache;
	}

	/**
	 * Show the about page.
	 *
	 * @return Response
	 */
	public function about()
	{
        $key = snake_case(class_basename($this) . '_' . __function__);

        if ($this->cache->has($key)) {
            $view = $this->cache->get($key);
        } else {
			$view = view('pages.about')->render();
        	$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}

	/**
	 * Show the advertise page.
	 *
	 * @return Response
	 */
	public function advertise()
	{
        $key = snake_case(class_basename($this) . '_' . __function__);

        if ($this->cache->has($key)) {
            $view = $this->cache->get($key);
        } else {
			$view = view('pages.advertise')->render();
        	$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}

	/**
	 * Show the privacy page.
	 *
	 * @return Response
	 */
	public function privacy()
	{
        $key = snake_case(class_basename($this) . '_' . __function__);

        if ($this->cache->has($key)) {
            $view = $this->cache->get($key);
        } else {
			$view = view('pages.privacy')->render();
        	$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}

	/**
	 * Show the terms page.
	 *
	 * @return Response
	 */
	public function terms()
	{
        $key = snake_case(class_basename($this) . '_' . __function__);

        if ($this->cache->has($key)) {
            $view = $this->cache->get($key);
        } else {
			$view = view('pages.terms')->render();
        	$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}

	/**
	 * Show the sitemap page.
	 *
	 * @return Response
	 */
	public function sitemap()
	{
        $key = snake_case(class_basename($this) . '_' . __function__);

        if ($this->cache->has($key)) {
            $view = $this->cache->get($key);
        } else {
			$view = view('pages.sitemap')->render();
        	$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}
}
