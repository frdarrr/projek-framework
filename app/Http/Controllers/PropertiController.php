<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    public function index()
    {
        $properti = Properti::all();

        return view("admin-kos.properti.index", ['properti'=>$properti]);
    }

    public function create()
    {
        return view("admin-kos.properti.create");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'tipe' => 'required|string',
            'harga' => 'required|numeric',
            'alamat' => 'required|string',
            'wifi' => 'required|string',
            'jumlah_kamar' => 'required|integer',
            'tipe_kamarmandi' => 'required|string',
            'dapur' => 'required|string',
            'lain' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }
        
        $properti = Properti::create([
            'admin_id' => 5,
            'nama' => $request->input('nama'),
            'tipe' => $request->input('tipe'),
            'harga' => $request->input('harga'),
            'alamat' => $request->input('alamat'),
            'wifi' => $request->input('wifi'),
            'jumlah_kamar' => $request->input('jumlah_kamar'),
            'tipe_kamarmandi' => $request->input('tipe_kamarmandi'),
            'dapur' => $request->input('dapur'),
            'lain' => $request->input('lain'),
            'gambar' => $imageName,
        ]);

        $properti->save();
        return redirect('properti');
    }
    public function destroy(Properti $properti){
        $properti->delete();
        return redirect('properti');
    }
    public function edit(Properti $properti)
    {
        return view("admin-kos.properti.edit", compact('properti'));
    }
    public function update(Request $request, Properti $properti) {
        $request->validate([
            'nama' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
            'wifi' => 'required',
            'jumlah_kamar' => 'required',
            'tipe_kamarmandi' => 'required',
            'dapur' => 'required',
            'lain' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
    
        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();  
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = $imageName;
    
            // Delete old image if exists
            if ($properti->gambar && file_exists(public_path('images/'.$properti->gambar))) {
                unlink(public_path('images/'.$properti->gambar));
            }
        }
    
        $properti->update($input);
        return redirect('properti');
    }
    

}
