<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $ds = Barang::all();
        
        return view('dashboard', compact(['ds']));
    }
    public function databarang(){
        $data = Barang::all();

        return view('databarang', compact(['data']));
    }
    public function hapus($id){
        $data = Barang::find($id);
        $data->delete();

        return redirect('databarang');
    }
    public function tambahdata(){
        return view('tambah');
    }
    public function insert(Request $request){
        Barang::create($request->except('_token', 'submit'));

        return redirect('databarang');
    }
    public function tampildata($id){
        $data = Barang::find($id);
    
        return view('tampildata', compact(['data']));
    }
    public function updatedata(Request $request,$id){
        $data = Barang::find($id);

        $data->update($request->all());

        return view('databarang', compact(['data']));
    }
}
