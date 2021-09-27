<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Article;
use App\Models\Category;

class AdminController extends Controller
{
    public function index() {
        $articles = Article::with('category')->get();

        return view('admin.index', [
            'articles' => $articles
        ]);
    }

    public function login() {
        return view('admin.login');
    }

    public function profile() {
        return view('admin.profile');
    }

    public function edit() {
        return view('admin.edit');
    }

}
