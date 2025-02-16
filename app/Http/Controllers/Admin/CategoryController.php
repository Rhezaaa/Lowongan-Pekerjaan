<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index(): View
    {
        $categories = Category::get();
        
        return view('admin.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        $slug = Str::slug($request->title, '-');
        Category::create($request->validated() + ['slug' => $slug]);

        return redirect()->route('admin.categories.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $slug = Str::slug($request->title, '-');
        $category->update($request->validated() + ['slug' => $slug]);

        return redirect()->route('admin.categories.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}