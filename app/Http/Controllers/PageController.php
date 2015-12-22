<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cache;
use Auth;
use Carbon\Carbon;

class PageController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Page Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	protected $client;

	public function __construct()
	{

	}

	/**
	 * Show the about page.
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('pages.about');
	}

	/**
	 * Show the advertise page.
	 *
	 * @return Response
	 */
	public function advertise()
	{
		return view('pages.advertise');
	}

	/**
	 * Show the privacy page.
	 *
	 * @return Response
	 */
	public function privacy()
	{
		return view('pages.privacy');
	}

	/**
	 * Show the terms page.
	 *
	 * @return Response
	 */
	public function terms()
	{
		return view('pages.terms');
	}

	/**
	 * Show the sitemap page.
	 *
	 * @return Response
	 */
	public function sitemap()
	{
		return view('pages.sitemap');

	}
}
