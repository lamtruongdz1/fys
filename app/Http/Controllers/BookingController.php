<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list(){
        return view('admin.booking.booking-list');
    }
    public function details(){
        return view('admin.booking.booking-details');
    }
}
