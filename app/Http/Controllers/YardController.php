<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Yard;

class YardController extends Controller
{
    public function __invoke()
    {
        // ...
    }

    public function index()
    {
        $yards = Yard::all();
        return view('dashboard.yard.index', compact('yards'));
    }


    public function show($id)
    {
        // $yard = Yard::findOrFail($id);
        return view('pages.san.thongtinsan', [
            'yard' => Yard::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'price' => 'required',
        ]);

        $path = $request->file('image')->store('public/uploads/yard');

        $yard = new Yard;
        $yard->name = $request->input('name');
        $yard->price = $request->input('price');
        $yard->img = $path;

        $yard->save();
        return redirect()->back()->with('message','yard Image Upload Successfully');
    }

    public function update(Request $request, Yard $yard)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'phone' => 'required',
        ]);

        $yard->update($request->all());

        return redirect()->route('yard.index');
        // ->with('success','user updated successfully');
    }

    public function destroy(Yard $yard)
    {
        $yard->delete();
        return redirect('yard.index');
        //  ->with('flash_message', 'User deleted!');
    }
}
