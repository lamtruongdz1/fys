<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yard;
class HomeController extends Controller
{
    public function index(){
        $yard = Yard::orderBy('view','DESC')->limit(5)->get() ;
        return view('pages.san.trangchu',compact('yard'));
    }
    public function link404(){
        return view('errors.404');
    }
    public function search(Request $request){
        //
    }
    public function dashboard(){
        return view('dashboard');
    }

}
