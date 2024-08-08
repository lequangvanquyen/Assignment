<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.category.index', compact('categories'));
    }



    public function create()
    {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:categories,slug|max:255',
        ]);

        Category::create($request->only('name', 'slug'));

        return redirect()->route('category.index')->with('success', 'Danh mục đã được tạo thành công.');
    }


    public function show(int $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.show', compact('category'));
    }


    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }


    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:categories,slug,' . $id . '|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->only('name', 'slug'));

        return redirect()->route('category.index')->with('success', 'Danh mục đã được cập nhật thành công.');
    }


    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Danh mục đã được xóa thành công.');
    }
}
