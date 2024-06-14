<?php

namespace App\Repositories;

use App\Models\Testimoni;

class TestimoniRepository
{
    protected $model;

    public function __construct(Testimoni $model)
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

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $testimoni = $this->model->findOrFail($id);
        if ($testimoni) {
            $testimoni->update($data);
            return $data;
        }
        return null;
    }

    public function delete($id)
    {
        $testimoni = $this->model->findOrFail($id);
        if ($testimoni) {
            return $testimoni->delete();
        }
        return false;
    }
}
