<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use Str;
class DistrictController extends Controller
{
    public function index()
    {
       $districts = District::all();
        return view('dashboard.districts.index',compact('districts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $district = new District;
        $district->name = $request->input('name');
        $district->slug = '';
        $district->save();
        return redirect()->back();
    }

    public function edit(District $district)
    {
        return view('dashboard.districts.edit',compact('district'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $district = District::find($id);
        $district->name = $request->input('name');
        $district->slug = Str::slug($district->name);
        $district->save();

        return redirect('districts');
        // ->with('success','user updated successfully');
    }
    public function show($id)
    {
       //
    }

    public function destroy(District $district)
    {
        $district->delete();
        return redirect('districts');
        //  ->with('flash_message', 'User deleted!');
    }
}
