<?php

namespace App\Http\Controllers;

use CoderStudios\Models\Categories;
use CoderStudios\Models\Contents;
use Request;

class HomeController extends Controller
{
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

    public function __construct(Contents $content, Categories $category)
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
        $category = Request::input('bmw_mini');
        if (!empty($category)) {
            switch ($category) {
                case 4: $category = 'mini-engine';

                    break;

                case 2: $category = 'mini-general';

                    break;

                case 6: $category = 'mini-body';

                    break;

                case 7: $category = 'mini-suspension';

                    break;

                case 8: $category = 'mini-general';

                    break;

                case 9: $category = 'mini-general';

                    break;

                case 10: $category = 'mini-general';

                    break;
            }

            return redirect()->route('category', $category);
        }

        $categories = $this->category->where('enabled', '1')->get();

        return view('pages.home', compact('categories'))->render();
    }

    public function error404()
    {
        return view('errors.404');
    }
}
