<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\CreateTestimoniRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdateTestimoniRequest;
use App\Repositories\ProjectRepository;
use App\Repositories\TestimoniRepository;
use App\UploadFile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestimoniController extends Controller
{
    use UploadFile;

    protected $testimoniRepository;
    protected $projectRepository;

    public function __construct(TestimoniRepository $testimoniRepository, ProjectRepository $projectRepository)
    {
        $this->testimoniRepository = $testimoniRepository;
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        $data = $this->testimoniRepository->getAll();
        return view('pages.admin.testimoni.index', compact('data'));
    }

    public function create()
    {
        $projects = $this->projectRepository->getAll();
        return view('pages.admin.testimoni.create', compact('projects'));
    }

    public function store(CreateTestimoniRequest $request)
    {
        $input = $request->all();
        
        DB::beginTransaction();
        try {
            $input['proof'] = $this->uploadFile($request->file('proof'), 'proof');
            $this->testimoniRepository->create($input);

            DB::commit();
            return redirect()->route('testimoni.index')->with('success', 'Sukses menambah data testimoni');;
        } catch (Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function edit($id)
    {
        $data = $this->testimoniRepository->findOne($id);
        $projects = $this->projectRepository->getAll();

        return view('pages.admin.testimoni.edit', compact('data', 'projects'));
    }

    public function update(UpdateTestimoniRequest $request, $id)
    {
        $input = $request->all();
        
        try {
            if ($request->file('proof')) {
                $testimoni = $this->testimoniRepository->findOne($id);
                $input['proof'] = $this->updateFile($request->file('proof'), $testimoni->proof, 'proof');
            }

            $this->testimoniRepository->update($id, $input);
            return redirect()->route('testimoni.index')->with('success', 'Sukses mengubah data testimoni');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->testimoniRepository->delete($id);
            return redirect()->route('testimoni.index')->with('success', 'Sukses menghapus data testimoni');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
