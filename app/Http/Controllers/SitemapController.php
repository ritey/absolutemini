<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Repositories\CategoryRepositoryInterface;
use CoderStudios\Repositories\ContentRepositoryInterface;
use App;
use URL;
use Carbon\Carbon;

class SitemapController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Sitemap Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	private $category;

	private $article;

	public function __construct(CategoryRepositoryInterface $category, ContentRepositoryInterface $article)
	{
		$this->category = $category;
		$this->article	= $article;
	}

	/**
	 * Show the sitemap
	 *
	 * @return Response
	 */
	public function index()
	{
		$sitemap = App::make("sitemap");

		$sitemap->setCache('laravel.sitemap', 3600);

		if (!$sitemap->isCached()) {

			$sitemap->add(URL::to('/'), '2015-09-27T12:00:00+02:00', '1.0', 'daily');
			$sitemap->add(URL::route('about'), '2015-09-27T12:00:00+02:00', '0.5', 'yearly');

			$categories = $this->category->where('enabled','1')->get();
			foreach($categories as $category) {
				$sitemap->add(URL::to('/') . '/' . $category->slug, $category->updated_at->toRfc2822String(), '0.8', 'monthly');
			}

			$articles = $this->article->where('enabled','1')->get();
			foreach($articles as $article) {
				$category = $this->category->where('id',$article->category_id)->first();
				$category_slug = '';
				if (isset($category->slug)) {
					$category_slug = $category->slug;
					$sitemap->add(URL::to('/') . '/' . $category_slug . '/' . $article->slug, $article->updated_at->toRfc2822String(), '0.9', 'monthly');
				}
			}

		}
    	// show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    	return $sitemap->render('xml');
	}

}
