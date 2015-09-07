<?php

namespace CoderStudios\Repositories;

interface RepositoryInterface
{
	public function all($columns = array('*'));

	public function getNew(array $attributes = array());

	public function paginate($perPage = 15, $columns = array('*'));

	public function create(array $attributes);

	public function find($id, $columns = array('*'));

	public function updateWithIdAndInput($id, array $input);

	public function destroy($id);

	public function filterAll(array $filters = array(), array $columns = array('*'));

	public function filterTotal($filters = array(), $columns = array('count(*)'));
}