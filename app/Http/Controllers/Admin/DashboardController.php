<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function create()
    {
        return view('admin.dashboard-create');
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
