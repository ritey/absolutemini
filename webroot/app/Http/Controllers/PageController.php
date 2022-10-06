<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Page Controller
    |--------------------------------------------------------------------------
    |
    |
    */

    /**
     * Show the about page.
     *
     * @return Response
     */
    public function about()
    {
        return view('pages.about')->render();
    }

    /**
     * Show the advertise page.
     *
     * @return Response
     */
    public function advertise()
    {
        return view('pages.advertise')->render();
    }

    /**
     * Show the privacy page.
     *
     * @return Response
     */
    public function privacy()
    {
        return view('pages.privacy')->render();
    }

    /**
     * Show the terms page.
     *
     * @return Response
     */
    public function terms()
    {
        return view('pages.terms')->render();
    }

    /**
     * Show the sitemap page.
     *
     * @return Response
     */
    public function sitemap()
    {
        return view('pages.sitemap')->render();
    }
}
