<?php

namespace App\Http\Controllers;

use CoderStudios\Models\Categories;
use CoderStudios\Models\Contents;

class ArticleController extends Controller
{
    public function __construct(Contents $content, Categories $category)
    {
        $this->content = $content;
        $this->category = $category;
    }

    public function index()
    {
        $filters = [
            ['name' => 'enabled', 'value' => 1],
            ['name' => 'content_group', 'value' => 'article'],
        ];
        $content = $this->content->where('enabled', 1)->where('content_group', 'article')->orderBy('created_at', 'DESC')->get();

        return view('pages.content_index', compact('content'));
    }

    public function category($category_id)
    {
        $category = $this->category->where('slug', $category_id)->first();
        if (is_object($category)) {
            $articles = $this->content->where('category_id', $category->id)->where('enabled', '1')->paginate(15);
            $view = view('pages.category', compact('articles', 'category'))->render();
        } else {
            return redirect()->route('404');
        }

        return $view;
    }

    public function article($category_slug, $slug)
    {
        $category = $this->category->where('slug', $category_slug)->first();

        $content = $this->content->where('enabled', 1)->where('slug', $slug);
        if ($category) {
            $content = $content->where('category_id', $category->id);
        }

        $content = $content->first();
        if (!$content) {
            return redirect()->route('404');
        }

        $content->category = $category;

        return view('pages.content_show', compact('content'))->render();
    }
}
