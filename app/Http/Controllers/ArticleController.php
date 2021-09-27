<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('admin.posts.create', ['categories' => $categories]);
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit', ['article' => $article, 'categories' => $categories]);
    }

    public function store(Request $request) {
        return $this->savePost($request, false);
    }

    public function update(Request $request, $id) {
        return $this->savePost($request, $id);
    }

    public function savePost($request, $id) {
        if($id) {
            $article = Article::findOrFail($id);
        } else {
            $article = new Article();
        } 
        //TODO: validar los datos que llegan
        $article->article_title = $request->input('title');
        $article->article_description = $request->input('description');
        $article->article_text = $request->input('article-text');
        $article->category_id = $request->input('article_category');
        $article->user_id = 1; //TODO: ingresar usuario logueado

        $article->save();
        
        return redirect()->route('admin.index');
    }

    public function destroy($id) {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.index');
    }

    
}
