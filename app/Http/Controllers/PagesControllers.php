<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function home(){
        return view('index');
    }
     public function about(){
        return view("pages/about");
     }
}
