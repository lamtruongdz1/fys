<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Yard;
use App\Models\District;
use Psy\Util\Str;
use Illuminate\Support\Facades\DB;

class YardController extends Controller
{
    public function __invoke()
    {
        // ...
    }

    public function index()
    {
        $yards = Yard::all();
        $districts = District::all();
        return view('dashboard.yard.index', compact('yards', 'districts'));
    }
    public function index_client()
    {
        $yards = Yard::all();
        return view('pages.san.danhsachsan', compact('yards'));
    
    }


    public function show($param)
    {
        // $yard = Yard::findOrFail($id);
        return view('pages.san.thongtinsan', [
            'yard' => Yard::where('id', $param)
                ->orWhere('slug', $param)
                ->firstOrFail()
        ]);
    }
    public function show_client($id)
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
            'address' => 'required',
            'timeopen' => 'required',
            'timeclose' => 'required',
            'district' => 'required'
        ]);

        $path = $request->file('image')->store('public/uploads/yard');

        $yard = new Yard;
        $yard->name = $request->input('name');
        $yard->slug = Str::slug('$yard->name');
        $yard->price = $request->input('price');
        $yard->address = $request->input('address');
        $yard->time_open = $request->input('timeopen');
        $yard->time_close = $request->input('timeclose');
        $yard->id_districts = $request->get('district');
        $yard->img = $path;

        $yard->save();
        return redirect()->back()->with('message', 'yard Image Upload Successfully');
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

    public function search($search_text){
        if(isset($_GET['key'])){
          $search_text = $_GET['key'];
          $yards = DB::table('yards')->where('name', 'LIKE', '%'.$search_text.'%');
          return view('pages.san.search', compact('yards'));
    }
}
}
