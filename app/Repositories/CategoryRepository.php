<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function pagination()
    {
        return $this->model->paginate(10);
    }

    public function findOne($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findBySlug($slug)
    {
        return $this->model->whereSlug($slug)->first();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $user = $this->model->findOrFail($id);
        if ($user) {
            $user->update($data);
            return $user;
        }
        return null;
    }

    public function delete($id)
    {
        $user = $this->model->findOrFail($id);
        if ($user) {
            return $user->delete();
        }
        return false;
    }
}
