<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\CategoryRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data = $this->categoryRepository->getAll();
        return view('pages.admin.category.index', compact('data'));
    }

    public function create()
    {
        return view('pages.admin.category.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($input['name']);
        try {
            $this->categoryRepository->create($input);
            return redirect()->route('category.index')->with('success', 'Sukses menambah data kategori');;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit($slug)
    {
        $data = $this->categoryRepository->findBySlug($slug);
        return view('pages.admin.category.edit', compact('data'));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($input['name']);
        try {
            $this->categoryRepository->update($id, $input);
            return redirect()->route('category.index')->with('success', 'Sukses mengubah data kategori');;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->categoryRepository->delete($id);
            return redirect()->route('category.index')->with('success', 'Sukses menghapus data kategori');;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
