<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YardController extends Controller
{
    public function index(){
        return view('pages.yard');
    }
    public function details(){
        return view('pages.yard-detail');
    }
}
