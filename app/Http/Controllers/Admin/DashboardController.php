<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jenishewan;

class DashboardController extends Controller
{
    public function index()
    {
        $jenishewan = Jenishewan::get();
        return view('admin.dashboard',compact('jenishewan'));
    }
    public function create()
    {
        return view('admin.dashboard-create');
        
    }

    public function store(Request $request)
    {
        $gambar=$request->file('gambar');
        $nama_gambar = $gambar->getClientOriginalName();
        $simpan_gambar = $gambar->move('adminlte/gambar',$nama_gambar);

        if($simpan_gambar){
            $jenishewan = new Jenishewan;
            $jenishewan->nama = $request->input('nama');
            $jenishewan->gambar = $nama_gambar;
           if($jenishewan->save()){
            redirect(route('dashboard.index'));
    }
        }

    }

    // public function simpan(Request $request)
    // {
    //     // print_r($request->all());
    //     $inputHewan = new hewan;

    //     $inputHewan->jenis_hewan = $request->input('jenis');
    //     $inputHewan->berat_hewan = $request->input('harga');
    //     $inputHewan->harga = $request->input('harga');

    //     $inputHewan->save();

    // }
}
