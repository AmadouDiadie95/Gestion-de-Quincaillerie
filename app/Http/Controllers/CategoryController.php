<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add(){
        return view('category/category-add') ;
    }

    public function save(Request $request)
    {
        $category = new Category() ;
        $category->name = $request->name ;
        $category->description = $request->description ;
        $category->number_of_article = 0 ;
        $category->save() ;
        return view('category/category-list')->with(['allCategories'=>Category::all()]);
    }

    public function findAll()
    {
        return view('category/category-list')->with(['allCategories'=>Category::all()]);
    }

    public function findById(Request $request)
    {
        $id = $request->id ;
        return view('category/category-detail')->with(['categoryDetail'=>Category::find($id)]);
    }

    public function edit(Request $request)
    {
        $id = $request->id ;
        return view('category/category-edit')->with(['categoryDetail'=>Category::find($id)]);
    }

    public function delete(Request $request)
    {
        $category = Category::find($request->id) ;
        $category->delete() ;
        return view('category/category-list')->with(['allCategories'=>Category::all()]);
    }

    public function update(Request $request)
    {
        $category = Category::find($request->id) ;
        $category->name = $request->name ;
        $category->description = $request->description ;
        $category->update() ;
        return view('category/category-list')->with(['allCategories'=>Category::all()]);
    }

}
