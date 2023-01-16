<?php

namespace App\Repositories\Base;

use Illuminate\Support\Collection;

class BaseRepository
{


    /**
     * Summary of collection
     * @var mixed
     */
    private $collection;

    /**
     * Summary of model
     * @var Model|null
     */
    // private $model;

    /**
     * Get repository model
     *
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set repository collection
     *
     * @param Collection $collection
     * @return Collection $collection
     */
    public function setCollection(Collection $collection): Collection
    {
        return $this->collection = $collection;
    }

    /**
     * Fin an item by id
     * @param mixed $id
     * @return Model|null
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * find Or Fail
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }


    public function all()
    {
        return $this->model->all();
        // $models = $this->getModel();
        // $this->setCollection($models);
        // return $models;
    }

    /**
     * Create an item
     * @param array|mixed $data
     * @return Model|null
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * Update a item
     * @param int|mixed $id
     * @param array|mixed $data
     * @return bool|mixed
     */
    public function update($id, array $data)
    {
        return $this->model->findOrFail($id)->update($data);
    }

    /**
     * destroy many item with primary key
     * @param int|Model $id
     */
    public function destroy(array $id)
    {
        return $this->model->destroy($id);
    }

    /**
     * delete item
     * @param Model|int $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->findOrFail($id)->delete();
    }

    /**
     * Summary of with
     * @param mixed $relations
     * @return BaseRepository
     */
    public function with($relations)
    {

        if (is_string($relations)) {
            $this->with = explode(',', $relations);

            return $this;
        }

        $this->with = is_array($relations) ? $relations : [];

        return $this;
    }
}
