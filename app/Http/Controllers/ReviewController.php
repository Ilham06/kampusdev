<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewRequest;
use App\Repositories\ProjectRepository;
use App\Repositories\ReviewRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    protected $reviewRepository;
    protected $projectRepository;

    public function __construct(ReviewRepository $reviewRepository, ProjectRepository $projectRepository)
    {
        $this->reviewRepository = $reviewRepository;
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        $data = $this->reviewRepository->getAll();
        
        return view('pages.admin.review.index', compact('data'));
    }

    public function create()
    {
        $projects = $this->projectRepository->getAll();
        return view('pages.admin.review.create', compact('projects'));
    }

    public function getForm(Request $request)
    {
        return redirect()->route('review.write', $request->project_id);
    }

    public function write($id)
    {
        return view('pages.admin.review.write', compact('id'));
    }

    public function success($id)
    {
        return view('pages.admin.review.success');
    }

    public function store(CreateReviewRequest $request)
    {
        $input = $request->all();
        try {
            $data = $this->reviewRepository->create($input);
            return redirect()->route('review.success', $data);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->reviewRepository->delete($id);
            return redirect()->route('review.index')->with('success', 'Sukses menghapus data review');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
