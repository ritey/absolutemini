<?php

namespace CoderStudios\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use CoderStudios\Exceptions\InvalidArgumentException;
use Cache;

abstract class AbstractRepository
{
    /**
    * The model to execute queries on.
    *
    * @var 	\Illuminate\Database\Eloquent\Model
    */
    protected $model;

    /**
    * Create a new repository instance.
    *
    * @param \Illuminate\Database\Eloquent\Model $model The model to execute queries on
    */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
    * Return a new instance of the model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function getNew(array $attributes = array())
    {
        return $this->model->newInstance($attributes);
    }

    /**
    * Return all instances of the model.
    *
    * @param array $columns
    * return \Illuminate\Database\Eloquent\Model
    */
    public function all($columns = array('*'))
    {
        $key = snake_case(class_basename($this) . '_' . __function__);
        if (Cache::has($key)) {
            return Cache::get($key);
        }
        $result = $this->model->get($columns);
        Cache::add($key, $result, env('APP_CACHE_MINUTES'));
        return $result;
    }

    /**
    * Return all instances of the model.
    *
    * @param array $columns
    * return \Illuminate\Database\Eloquent\Model
    */
    public function filterAll(array $filters = array(), array $columns = array('*'))
    {
        $query = $this->model->query();
        $query = $this->processFilters($query, $filters);
        return $query;
    }

    /**
    * Order results.
    *
    * @param array $columns
    * return \Illuminate\Database\Eloquent\Model
    */
    public function order($query, $order, $direction = 'ASC')
    {
        if (!empty($order)) {
            return $query->orderBy($order, $direction);
        }
    }

    /**
    * Limit results.
    *
    * @param array $columns
    * return \Illuminate\Database\Eloquent\Model
    */
    public function limit($query, $start = 0, $limit = '25')
    {
        if (is_numeric($start) && is_numeric($limit)) {
            return $query->skip($start)->take($limit);
        }
    }

    /**
    * Return total count.
    *
    * @param array $columns
    * return \Illuminate\Database\Eloquent\Model
    */
    public function filterTotal($filters = array(), $columns = array('*'))
    {
        $query = $this->filterAll($filters, $columns);
        return $query->count();
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->model, $method], $args);
    }

    private function processFilters($query, $filters)
    {
        $allowed_filters = array_merge($this->model->getFillable(), $this->model->getGuarded());
        if (count($filters)) {
            foreach ($filters as $filter) {
                if (!in_array($filter['name'], $allowed_filters)) {
                    throw new InvalidArgumentException("The field [".$filter['name']."] is not a valid filterable field.");
                }
                if (isset($filter['operator'])) {
                    switch (strtolower($filter['operator'])) {
                        case 'in': $query->whereIn($filter['name'], $filter['value']); break;
                        case 'like': $query->where($filter['name'], 'LIKE', $filter['value']); break;
                        case 'not null': $query->whereNotNull($filter['name']); break;
                        case 'null': $query->whereNull($filter['name']); break;
                        default: $query->where($filter['name'], $filter['value']); break;
                    }
                } else {
                    $query->where($filter['name'], $filter['value']);
                }
            }
        }
        return $query;
    }

    /**
    * Return a paginated instance of a model.
    *
    * @param integer $perPage
    * @param array $columns
    * return \Illuminate\Database\Eloquent\Model
    */
    public function paginate($perPage = 15, $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns);
    }

    /**
    * Return a created instance of the model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
    * Return an instance of the model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function find($id, $columns = array('*'))
    {
        $key = snake_case(class_basename($this) . '_' . $id . '_' . __function__);
        if (Cache::has($key)) {
            return Cache::get($key);
        }
        $result = $this->model->find($id, $columns);
        Cache::add($key, $result, env('APP_CACHE_MINUTES'));
        return $result;
    }

    /**
    * Return an updated instance of a model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function updateWithIdAndInput($id, array $input)
    {
        $model = $this->model->find($id);
        return $model->update($input);
    }

    /**
    * Return a new instance of the model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}
