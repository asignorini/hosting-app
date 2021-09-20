<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create() {
        return view('admin.posts.create');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('admin.posts.edit', ['article' => $article]);
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
        $article->title = $request->input('title');
        $article->short_description = $request->input('description');
        $article->text = $request->input('article-text');
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
