<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Role;

class AdminController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        return view('admin.admin-table',compact('admin'));
    }

    public function create()
    {
        $role = Role::all();
        return view('admin.admin-create',compact('role'));
    }

    public function store(Request $request)
    {   
        $file =  $request->file('image');
        $fileNameArr = explode('.',$file->getClientOriginalName());
        $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
        $file->move('adminimage', $fileName);

        $data = $request->all();
        unset($data['token']);
        $data['image'] = $fileName;

        $save = Admin::create($data);

        if(!$save){
            Storage::delete('adminimage/'.$fileName);
        } else{
            return redirect()->route('admin.index');
        }
        
    }
}
