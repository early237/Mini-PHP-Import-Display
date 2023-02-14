<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//NORMAL CONTROLLER

class HomeController extends Controller
{
    //Action Methods
    public function index()
    {
            return view('welcome');
    }

    public function about()
    {
            return view('about');
    }


    public function contact()
    {
            return view('contact');
    }


  /*  public function about() {
        return 'about';
    } */

    

    /* public function contact() {
        return 'contact';
    } */

}
