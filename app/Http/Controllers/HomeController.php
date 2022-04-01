<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yard;
use App\Models\District;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        $yard = Yard::orderBy('view','DESC')->limit(5)->get() ;
        $districts = District::all();
        return view('pages.san.trangchu',compact('yard','districts'));
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

    public function districts($slug){
        $districts = District::where('slug', $slug)->first();
        $yards = Yard::where('id_districts', $districts->id)->get();
        return view('pages.san.santheoquan', compact('yards'));
    }

}
