<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function login() {
        return view('admin.login');
    }

    public function profile() {
        return view('admin.profile');
    }

    public function edit_profile() {
        return view('admin.edit-profile');
    }

    public function create_post() {
        return view('admin.abm-posts.create');
    }

    public function edit_post() {
        return view('admin.abm-posts.edit');
    }
}
