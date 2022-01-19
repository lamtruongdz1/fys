<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layout(){
        return view('layout');
    }
    public function demo(){
        return view('pages.demo');
    }
}
