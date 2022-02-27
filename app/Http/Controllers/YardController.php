<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YardController extends Controller
{
    public function index(){
        return view('pages.san.danhsachsan');
    }
    public function details(){
        return view('pages.san.thongtinsan');
    }
    public function edit(){
        return view('admin.yard.edit');
    }
    public function add_yard(){
        return view('admin.yard.new-yard');
    }
    public function list(){
        return view('admin.yard.list-yard');
    }
}
