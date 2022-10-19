<?php

namespace CoderStudios\Composers;

use CoderStudios\Models\Categories;
use Illuminate\Contracts\View\View;

class Error404Composer
{
    /*
    |--------------------------------------------------------------------------
    | 404 Composer Class
    |--------------------------------------------------------------------------
    |
    | Loads variables for the error page
    |
    */

    public function __construct(Categories $category)
    {
        $this->category = $category;
    }

    public function compose(View $view)
    {
        $categories = $this->category->where('enabled', '1')->get();
        $view->with('categories', $categories);
    }
}
