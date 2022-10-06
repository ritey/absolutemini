<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use CoderStudios\Repositories\CategoryRepositoryInterface;
use CoderStudios\Repositories\ContentRepositoryInterface;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
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
        $this->article = $article;
    }

    /**
     * Show the sitemap.
     *
     * @return Response
     */
    public function index()
    {
        $sitemap = Sitemap::create()

            ->add(Url::create('/')
                ->setLastModificationDate(Carbon::parse('2015-09-27T12:00:00+02:00'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1))

            ->add(Url::create('/about')
                ->setLastModificationDate(Carbon::parse('2015-09-27T12:00:00+02:00'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1))
        ;

        $categories = $this->category->where('enabled', '1')->get();
        foreach ($categories as $category) {
            $sitemap->add(
                Url::create(URL::to('/').'/'.$category->slug)
                    ->setLastModificationDate(Carbon::parse($category->updated_at->toRfc2822String()))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                    ->setPriority(0.8)
            );
        }

        $articles = $this->article->where('enabled', '1')->get();
        foreach ($articles as $article) {
            $category = $this->category->where('id', $article->category_id)->first();
            $category_slug = '';
            if (isset($category->slug)) {
                $category_slug = $category->slug;
                $sitemap->add(
                    Url::create(URL::to('/').'/'.$category_slug.'/'.$article->slug)
                        ->setLastModificationDate(Carbon::parse($article->updated_at->toRfc2822String()))
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                        ->setPriority(0.9)
                );
            }
        }

        $sitemap->render()
        ;

        return response($sitemap, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
