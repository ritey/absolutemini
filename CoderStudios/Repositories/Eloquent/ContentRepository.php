<?php

namespace CoderStudios\Repositories\Eloquent;

use CoderStudios\Repositories\Eloquent\AbstractRepository;
use CoderStudios\Repositories\ContentRepositoryInterface;
use CoderStudios\Models\Contents;

class ContentRepository extends AbstractRepository implements ContentRepositoryInterface {

	/**
	 * Construct the class
	 * @param Results
	 */
	public function __construct(Contents $contents)
	{
		$this->model = $contents;
	}
}