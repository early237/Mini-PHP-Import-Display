<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Action Methods
    public function index()
    {
            return view('login');
    }
}
