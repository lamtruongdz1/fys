<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yard;

class YardController extends Controller
{
    public function __invoke()
    {
        // ...
    }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $yard = Yard::all() ; 
        return view('pages.san.danhsachsan',compact('yard'));
    }
    public function show($id){
        // $yard = Yard::findOrFail($id);
        return view('pages.san.thongtinsan',[
            'yard'=>Yard::findOrFail($id)  
        ]);
    }

}
