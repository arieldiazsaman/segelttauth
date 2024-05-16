<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegelttLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('segeltt_login');
    }
}
