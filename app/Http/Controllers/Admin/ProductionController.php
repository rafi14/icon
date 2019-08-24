<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use App\Productions;
use Illuminate\Support\Facades\File;

class ProductionController extends Controller
{
    public function index()
    {
        $products = Productions::where('is_deleted',0)->get();
        return view('admin.production-table',compact('products'));
    }

    public function create()
    {
        $type = Type::all();
        return view('admin.production-create',compact('type'));
    }

    public function store(Request $request)
    {
        $file =  $request->file('image');
        $fileNameArr = explode('.',$file->getClientOriginalName());
        $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
        $file->move('productimage', $fileName);

        $data = $request->all();
        unset($data['token']);
        $data['image'] = $fileName;

        $save = Productions::create($data);

        if(!$save){
            File::delete('productimage/'.$fileName);
        } else{
            return redirect()->route('admin.product.index');
        }
        
    }
    public function detail($id)
    {
        // dd($id);
        $detailProduk = Productions::findOrFail($id);
        // dd($detailProduk);
        return view('admin.production-detail',compact('detailProduk'));
    }

    public function edit($id)
    {
        $type = Type::all();
        $editProduk = Productions::findOrFail($id);
        return view('admin.production-edit',compact('editProduk','type'));
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
            $file->move('productimage', $fileName);

            $update['image'] = $fileName;

            $gambar = Productions::find($id)->image;
            // dd($gambar);
            // exit();
            File::delete('productimage/' . $gambar);
        }

       

        $update_action = Productions::where('id',$id)->update($update);
        if ($update_action){
            return redirect()->route('admin.product.detail',$id);
        }else{
            echo "Gagal Update";
        }

    }
    public function delete($id)
    {
        $data = [
            'is_deleted' => 1
        ];

        $delete_action = Productions::where('id',$id)->update($data);
        if ($delete_action){
            return redirect()->route('admin.product.index');
        }else{
            echo "Gagal Delete";
        }
    }
}
