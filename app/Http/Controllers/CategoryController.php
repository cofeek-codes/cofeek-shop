<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add(Request $request)
    {
        if (Category::where('title', $request->input('title'))->exists()) {
            return redirect()->back()->withErrors('this category already exists');
        }

        Category::create([
            'title' => $request->input('title'),
        ]);

        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->back();
    }
}
