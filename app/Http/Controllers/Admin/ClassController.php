<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kelas;
use App\Productions;
use Illuminate\Support\Facades\File;

class ClassController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.class-table',compact('kelas'));
    }

    public function create()
    {
        $product = Productions::all();
        return view('admin.class-create',compact('product'));
    }

    public function store(Request $request)
    {
        $file =  $request->file('image');
        $fileNameArr = explode('.',$file->getClientOriginalName());
        $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
        $file->move('kelasimage', $fileName);

        $data = $request->all();
        unset($data['token']);
        $data['image'] = $fileName;

        $save = Kelas::create($data);

        if(!$save){
            File::delete('kelasimage/'.$fileName);
        } else{
            return redirect()->route('admin.class.index');
        }
    }

    public function detail($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.class-detail',compact('kelas'));
    }

    public function edit($id)
    {
        $type = Productions::all();
        $editKelas = Kelas::findOrFail($id);
        return view('admin.class-edit',compact('editKelas','type'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $update = $request->all();
        unset($update['_token']);
        unset($update['_method']);

        $file =  $request->file('image');
        if ($file != null){

            $fileNameArr = explode('.',$file->getClientOriginalName());
            $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
            $file->move('kelasimage', $fileName);

            $update['image'] = $fileName;

            $gambar = Kelas::find($id)->image;
            // dd($gambar);
            // exit();
            File::delete('kelasimage/' . $gambar);
        }

       

        $update_action = Kelas::where('id',$id)->update($update);
        if ($update_action){
            return redirect()->route('admin.class.detail',$id);
        }else{
            echo "Gagal Update";
        }

    }

    
}
