<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Repositories\ContentRepositoryInterface;
use CoderStudios\Repositories\CategoryRepositoryInterface;

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

	public function __construct(ContentRepositoryInterface $content, CategoryRepositoryInterface $category)
	{
		$this->content = $content;
		$this->category = $category;
	}

	/**
	 * Show the homepage.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = $this->category->where('enabled','1')->get();

		return view('pages.home',compact('categories'));
	}
}
