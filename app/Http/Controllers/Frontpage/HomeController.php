<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categoryRepository;
    protected $projectRepository;

    public function __construct(CategoryRepository $categoryRepository, ProjectRepository $projectRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->projectRepository = $projectRepository;
    }

    public function index() {
        $categories = $this->categoryRepository->getAll();
        $projects = $this->projectRepository->getAll();

        return view('pages.home', compact('categories', 'projects'));
    }
}
