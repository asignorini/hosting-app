<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create() {
        return view('admin.posts.create');
    }

    public function store(Request $request) {
        Article::create([
            'title'             => $request->input('title'),
            'short_description' => $request->input('description'),
            'text'              => $request->input('article-text'),
            'user_id'           => 1 //TODO: ingresar el id del usuario logueado
        ]);
        //TODO: validar los datos que llegan
        return redirect()->route('admin.index');
    }

    public function edit() {
        return view('admin.posts.edit');
    }
}
