<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
	public function register()
	{
		$repositories = [
			'ContentRepository',
		];

		foreach($repositories as $repository) {
			$this->app->bind(
				"CoderStudios\Repositories\\" . $repository . "Interface",
				"CoderStudios\Repositories\Eloquent\\" . $repository
			);
		}
	}
}