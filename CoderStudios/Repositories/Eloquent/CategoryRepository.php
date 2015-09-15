<?php

namespace CoderStudios\Repositories\Eloquent;

use CoderStudios\Repositories\Eloquent\AbstractRepository;
use CoderStudios\Repositories\CategoryRepositoryInterface;
use CoderStudios\Models\Categories;

class CategoryRepository extends AbstractRepository implements CategoryRepositoryInterface {

	/**
	 * Construct the class
	 * @param Results
	 */
	public function __construct(Categories $categories)
	{
		$this->model = $categories;
	}
}