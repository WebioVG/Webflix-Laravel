<?php

namespace App\Http\Controllers;

use App\Models\Category;
use DateTime;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:categories',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->created_at = new DateTime();
        $category->updated_at = new DateTime();
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update($id, Request $request)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|min:3|unique:categories,name,'.$id
        ]);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
}
