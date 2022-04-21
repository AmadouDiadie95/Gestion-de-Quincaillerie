<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function add(){
        return view('article/article-add')->with(['allCategories'=>Category::all()]);
    }

    public function save(Request $request)
    {
        $article = new Article() ;
        $article->name = $request->name ;
        $article->description = $request->description ;
        $article->price = $request->price ;
        $article->quantity = $request->quantity ;
        $article->category_id = $request->category_id ;
        $category = Category::find($request->category_id) ;
        $article->category_name = $category->name ;
        $category->number_of_article++ ;
        $category->update() ;
        $article->save() ;
        return view('article/article-list')->with(['allArticles'=>Article::all()]);
    }

    public function findAll()
    {
        return view('article/article-list')->with(['allArticles'=>Article::all()]);
    }

    public function findById(Request $request)
    {
        $id = $request->id ;
        return view('article/article-detail')->with(['articleDetail'=>Article::find($id)]);
    }

    public function edit(Request $request)
    {
        $id = $request->id ;
        return view('article/article-edit')
            ->with(['articleDetail'=>Article::find($id)])
            ->with(['allCategories'=>Category::all()]);
    }

    public function delete(Request $request)
    {
        $article = Article::find($request->id) ;
        $category = Category::find($article->category_id) ;
        $category->number_of_article-- ;
        $category->update() ;
        $article->delete() ;
        return view('article/article-list')->with(['allArticles'=>Article::all()]);
    }

    public function update(Request $request)
    {

        $article = Article::find($request->id) ;
        $article->name = $request->name ;
        $article->description = $request->description ;
        $article->price = $request->price ;
        $article->quantity = $request->quantity ;
        $article->category_id = $request->category_id ;
        $category = Category::find($request->category_id) ;
        $article->category_name = $category->name ;
        $article->update() ;
        return view('article/article-list')->with(['allArticles'=>Article::all()]);
    }
}
