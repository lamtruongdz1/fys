<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('login_admin');
    }
    public function reset(){
        return view('reset_password');
    }
    public function show_dashboard(){
        // $this->AuthLogin();
    	return view('admin.dashboard');
    }
    public function profile(){
    	return view('admin.profile');
    }
    public function edit(){
    	return view('admin.edit');
    }
    // public function logout(){
    //     $this->AuthLogin();
    //     Session::put('admin_name',null);
    //     Session::put('admin_id',null);
    //     return Redirect::to('/admin');
    // }
}
