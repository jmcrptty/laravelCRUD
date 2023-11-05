<?php

namespace App\Http\Controllers;

use App\Models\Databarang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DatabarangController extends Controller
{
    public function index(){

        $data = Databarang::all();
        return view( 'pages.inventaris',compact('data'));
    }

    public function tambahinventaris(){
        return view('pages.tambahdata');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        Databarang::create($request->all());
        return redirect()->route('inventaris')->with('success',"Data Berhasil Di Tambahkan");
    }

    public function tampilkandata($id){
        $data = Databarang::find($id);
        // dd($data);
        return view('pages.tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Databarang::find($id);
        $data->update($request->all()); 
        return redirect()->route('inventaris')->with('success',"Data Berhasil Di Update");
    }

    public function deletedata($id){
        $data = Databarang::find($id);
        $data->delete();
        return redirect()->route('inventaris')->with('success',"Data Berhasil Di Hapus");
    }
    
}
 