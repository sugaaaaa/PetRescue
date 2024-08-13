<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('/admin/adminDashboard/category/index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/adminDashboard/category/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        try {
            $categories = new Category([
                'name' => $request->input('name'),
            ]);
            $categories->save();

            return redirect('/admin/adminDashboard/category/index')->with('success', 'Category added successfully!');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return redirect()->back()->withErrors(['name' => 'Category name already exists.'])->withInput();
            } else {
                return redirect()->back()->withErrors(['error' => 'An unexpected error occurred. Please try again later.'])->withInput();
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $category = Category::findOrFail($id);
        return view('/admin/adminDashboard/category/show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $category = Category::findOrFail($id);
        return view('/admin/adminDashboard/category/update', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $categories = Category::find($id);
        $categories->name = $request->input('name');
        $categories->sex = $request->input('sex');

        $categories->save();
        return redirect('/admin/adminDashboard/category/index')->with('flash_message', 'Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect('/admin/adminDashboard/category/index')->with('flash_message', 'Deleted!');
    }
}