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
        // TODO: validar
        $credentials = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        ];
        if(!Auth::attempt($credentials)) {
            return redirect()->route('auth.formLogin')->withInput();
        }
        return redirect()->route('admin.index'); //TODO: with('message.success', 'Inicio de sesión exitoso');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('auth.formLogin');
            //TODO: ->with('message.success', 'Sesión cerrada con éxito. ¡Te esperamos de nuevo!');
    }
}
