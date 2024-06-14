<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\ProjectRepository;
use App\UploadFile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    use UploadFile;
    protected $projectRepository;
    protected $categoryRepository;

    public function __construct(ProjectRepository $projectRepository, CategoryRepository $categoryRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data = $this->projectRepository->getAll();
        return view('pages.admin.project.index', compact('data'));
    }

    public function create()
    {

        $category = $this->categoryRepository->getAll();
        return view('pages.admin.project.create', compact('category'));
    }

    public function store(CreateProjectRequest $request)
    {

        $input = $request->except(['images']);
        $input['features'] = json_encode(explode(";", $request['features']));
        $input['technologies'] = json_encode(explode(";", $request['technologies']));
        $input['buy_packages'] = json_encode(explode(";", $request['buy_packages']));
        $input['slug'] = Str::slug($input['title']);
        $input['user_id'] = Auth::id();
        
        DB::beginTransaction();
        try {
            $input['banner'] = $this->uploadFile($request->file('banner'), 'project-banners');
            $project = $this->projectRepository->create($input);
            $this->projectRepository->storeImages($request->only('images'), $project->id);
            DB::commit();
            return redirect()->route('project.index')->with('success', 'Sukses menambah data proyek');
        } catch (Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function edit($slug)
    {
        $data = $this->projectRepository->findBySlug($slug);
        $category = $this->categoryRepository->getAll();
        return view('pages.admin.project.edit', compact('data', 'category'));
    }

    public function update(Request $request, $id)
    {

        $input = $request->except(['images']);
        $input['features'] = json_encode(explode(";", $request['features']));
        $input['technologies'] = json_encode(explode(";", $request['technologies']));
        $input['buy_packages'] = json_encode(explode(";", $request['buy_packages']));
        $input['slug'] = Str::slug($input['title']);
        
        DB::beginTransaction();
        try {
            if ($request->file('banner')) {
                $project = $this->projectRepository->findOne($id);
                $input['banner'] = $this->updateFile($request->file('banner'), $project->banner, 'project-banners');
            }
            
            $project = $this->projectRepository->update($id, $input);
            $this->projectRepository->storeImages($request->only('images'), $project->id);

            DB::commit();
            return redirect()->route('project.index')->with('success', 'Sukses menambah data proyek');
        } catch (Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->projectRepository->delete($id);
            return redirect()->route('project.index')->with('success', 'Sukses menghapus data projek');;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


}
