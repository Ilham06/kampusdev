<?php

namespace App\Repositories;

use App\Models\ProjectReview;

class ReviewRepository
{
    protected $model;

    public function __construct(ProjectReview $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function findOne($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function delete($id)
    {
        $review = $this->model->findOrFail($id);
        if ($review) {
            return $review->delete();
        }
        return false;
    }
}
