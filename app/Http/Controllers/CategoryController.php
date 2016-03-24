<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Repositories\CategoryRepositoryInterface;
use CoderStudios\Requests\CategoryRequest;
use App;
use Illuminate\Contracts\Cache\Repository as Cache;

class CategoryController extends Controller {

	public function __construct(Cache $cache, CategoryRepositoryInterface $category)
	{
		$this->category = $category;
		$this->cache = $cache;
	}

	public function index()
	{
		$category = $this->category->all();
		return view('admin.category_index',compact('category'));
	}

	public function edit($id)
	{
		$category = $this->category->find($id);

		if (!$category->count()) {
			App::Abort(404);
		}
		return view('admin.category_edit',compact('category'));
	}

	public function update(CategoryRequest $request, $id)
	{
		$this->category->updateWithIdAndInput($id,$request->only(
		'enabled',
		'slug',
		'name',
		'page_title',
		'meta_description'));
		$this->cache->flush();
		return redirect()->route('admin.category.index');
	}

	public function create()
	{
		$category = $this->category->getNew();
		return view('admin.category_new',compact('category'));
	}

	public function store(CategoryRequest $request)
	{
		$this->category->create($request->all());
		$this->cache->flush();
		return redirect()->route('admin.category.index');
	}
}