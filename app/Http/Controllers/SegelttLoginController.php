<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SegelttLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('segeltt_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->away('http://localhost:3000/');
        }

        return redirect()->back()->with('error', 'Usuario o contraseña no válido.');
    }
}

