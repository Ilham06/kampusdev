<?php

namespace App\Repositories;

use App\Models\Project;
use App\Models\ProjectImage;
use App\UploadFile;

class ProjectRepository
{
    use UploadFile;
    protected $model;
    protected $imageModel;

    public function __construct(Project $model, ProjectImage $imageModel)
    {
        $this->model = $model;
        $this->imageModel = $imageModel;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function pagination()
    {
        return $this->model->paginate(10);
    }

    public function getByCategory($category_id)
    {
        return $this->model->whereCategoryId($category_id)->with('project_images')->paginate(10);
    }

    public function getByCategoryWithLimit($category_id, $limit)
    {
        return $this->model->whereCategoryId($category_id)->with('project_images')->take($limit)->get();
    }

    public function findOne($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findBySlug($slug)
    {
        return $this->model->whereSlug($slug)->with('project_images')->first();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $project = $this->model->findOrFail($id);
        if ($project) {
            $project->update($data);
            return $project;
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

    public function storeImages($request, $projectId)
    {
        foreach ($request['images'] as $index => $imageData) {
            $data = ['label' => $imageData['label']];

            if (isset($imageData['id'])) {
                $existing = $this->imageModel->findOrFail($imageData['id']);

                if (isset($imageData['file']) && $imageData['file']->isValid()) {
                    $imagePath = $this->updateFile($imageData['file'], $existing->path, 'project-images');
                    $data['path'] = $imagePath;
                }

                $existing->update($data);
            } else {
                if (isset($imageData['file']) && $imageData['file']->isValid()) {
                    $imagePath = $this->uploadFile($imageData['file'], 'project-images');
                    $data['path'] = $imagePath;
                    $data['project_id'] = $projectId;

                    $this->imageModel->create($data);
                }
            }
        }

        return true;
    }
}
