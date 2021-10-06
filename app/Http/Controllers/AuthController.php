<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin() {
        return view('auth.formLogin');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);
        if(!Auth::attempt($credentials)) {
            return redirect()->route('auth.formLogin')->withInput();
        }
        return redirect()->route('admin.index')
        ->with('message.success', 'Bienvenido al panel de administracion.');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('auth.formLogin')
        ->with('message.success', 'Sesión cerrada con éxito. ¡Te esperamos de nuevo!');
    }
}
