<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Type;
use App\Productions;


class ProductionController extends Controller
{
    public function index()
    {
        $products = Productions::all();
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
            Storage::delete('productimage/'.$fileName);
        } else{
            return redirect()->route('admin.product.index');
        }
        
    }
}
