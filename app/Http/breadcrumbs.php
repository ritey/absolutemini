<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($category->name, route('category', $category->slug));
});

// Home > [Category] > [Article]
Breadcrumbs::register('article', function($breadcrumbs, $name)
{
    $breadcrumbs->parent('category', $name->category);
    $breadcrumbs->push($name->name, route('article', ['article_slug' => $name->slug , 'category_slug' => $name->category->slug]));
});