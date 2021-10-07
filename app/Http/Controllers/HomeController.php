<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function blog() {
        $articles = Article::all();
        $randomPosts = Article::inRandomOrder()->take(5)->get();
        return view('blog', [
            'posts' => $articles,
            'randomPosts' => $randomPosts
        ]);
    }
}
