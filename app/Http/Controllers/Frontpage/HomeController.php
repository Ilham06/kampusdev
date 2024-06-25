<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Repositories\CategoryRepository;
use App\Repositories\ProjectRepository;
use Carbon\Carbon;
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

    private function generateGreeting($hour)
    {
        if ($hour >= 5 && $hour < 12) {
            return 'Selamat Pagi';
        } elseif ($hour >= 12 && $hour < 18) {
            return 'Selamat Siang';
        } else {
            return 'Selamat Malam';
        }
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        
        $projects = $this->projectRepository->getAll();
        $populars = $this->projectRepository->getPopularProjects();

        $currentHour = Carbon::now()->format('H');
        $greeting = $this->generateGreeting($currentHour);

        return view('pages.home', compact('categories', 'projects', 'populars', 'greeting'));
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

    public function about()
    {
        return view('pages.about');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function kebijakanlayanan()
    {
        return view('pages.kebijakanlayanan');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function article()
    {
        return view('pages.article');
    }
}
