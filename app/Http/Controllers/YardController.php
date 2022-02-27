<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YardController extends Controller
{
    public function index(){
        return view('pages.yard');
    }
    public function edit(){
        return view('admin.yard.edit');
    }
    public function details(){
        return view('pages.yard-detail');
    }
    public function add_yard(){
        return view('admin.yard.new-yard');
    }
    public function list(){
        return view('admin.yard.list-yard');
    }
}
