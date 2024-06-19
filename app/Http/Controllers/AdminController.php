<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();

        return view("admin-kos.index", ['admin'=>$admin]);
    }
    public function create()
    {
        return view("admin-kos.form");
    }
    public function store(Request $request)
    {
            $admin = Admin::create([
                'nama' => $request['nama'],
                'email' => $request['email'],
                'password' => $request['password'],
                'no_telp' => $request['no_telp'],
            ]);
            $admin->save();
            return redirect('admin');
    }
    public function edit(Admin $admin)
    {
        return view("admin-kos.edit", compact('admin'));
    }
    public function update(Request $request, Admin $admin){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_telp' => 'required',
        ]);

        $admin->update($request->all());
        return redirect('admin');
    }
    public function destroy(Admin $admin){
        $admin->delete();
        return redirect('admin');
    }

}
