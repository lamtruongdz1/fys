<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.san.trangchu');
    }
    public function link404(){
        return view('errors.404');
    }
    public function link500(){
        return view('errors.505');
    }
    public function details($slug){
        return view('errors.505');
    }
    public function search(Request $request){
        //
    }

}
