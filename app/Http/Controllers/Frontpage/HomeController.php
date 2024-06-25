<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use App\Models\Project;
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

    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        
        $projects = $this->projectRepository->getAll();
        $populars = $this->projectRepository->getPopularProjects();

        return view('pages.home', compact('categories', 'projects', 'populars'));
    }

    public function detail($slug)
    {
        $project = $this->projectRepository->findBySlug($slug);
        $project->visit();
        $categories = $this->categoryRepository->getAll();
        $related_projects = $this->projectRepository->getByCategoryWithLimit($project->category_id, 2);

        return view('pages.project-detail', compact('project', 'categories', 'related_projects'));
    }

    public function list(Request $request)
    {
        $category = $request->get('category');
        $title = $request->get('title');
        
        $categories = $this->categoryRepository->getAll();

        $projects = Project::with('category');
        if ($title) {
            $projects = $projects->where('slug', 'like', '%' . $title . '%');
        }

        if ($category) {
            $projects = $projects->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        }

        $projects = $projects->paginate(10)->withQueryString();

        return view('pages.project-list', compact('projects', 'categories'));
    }
}
