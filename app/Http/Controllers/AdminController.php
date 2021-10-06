<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AdminController extends Controller
{
    public function index() {
        $articles = Article::with('category')->get();

        return view('admin.index', [
            'articles' => $articles
        ]);
    }

    public function profile() {
        return view('admin.profile');
    }
}
