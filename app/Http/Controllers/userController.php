<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Excel;
use PDF;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all() ;
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'detail' => 'required',

        ]);
        $path = $request->file('avatar')->store('public/uploads/user');

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->avatar = $path;
        $user->save();


        return redirect()->route('user.index');
            // ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all() ;
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'phone' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('user.index');
            // ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
         return redirect('users/list');
        //  ->with('flash_message', 'User deleted!');
    }

    public function export_excel(){
        return Excel::download(new EmployeeExport, 'user_excel.xlsx');
    }

    public function export_csv(){
        return Excel::download(new EmployeeExport, 'user_excel.csv');
    }

    public function download_pdf(){
        $users = User::all();
        $pdf = PDF::loadView('dashboard.users.pdf_user', compact('users'));
        return $pdf->download('list_suser.pdf');
    }
}
