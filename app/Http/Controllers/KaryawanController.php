<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function create(){
        return view('createKaryawan');
    }

    public function store(Request $request){
        Karyawan::create([
            'Nama' => $request-> Nama,
            'Umur' => $request-> Umur,
            'Alamat' => $request -> Alamat,
            'Telepon' => $request -> Telepon
        ]);
        //Nama dari model => nama dari form
        return redirect('/');
    }

    public function index(){
        $karyawans = Karyawan::all();

        return view('welcome', compact('karyawans'));
    }

    public function show($id){
        $karyawan = Karyawan::findOrFail($id);

        return view('showKaryawan', compact('karyawan'));
    }

    public function edit($id){
        $karyawan = Karyawan::findOrFail($id);
        return view('editKaryawan', compact('karyawan'));
    }

    public function update(Request $request, $id){
        Karyawan::findOrFail($id)->update([
            'Nama' => $request-> Nama,
            'Umur' => $request-> Umur,
            'Alamat' => $request -> Alamat,
            'Telepon' => $request -> Telepon
        ]);

        return redirect('/');
    }

    public function delete($id){
        Karyawan::destroy($id);

        return redirect('/');
    }
}
