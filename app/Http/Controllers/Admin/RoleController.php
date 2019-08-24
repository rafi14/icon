<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('admin.role-table',compact('role'));
    }

    public function create()
    {
        return view('admin.role-create');
    }

    public function store(Request $request)
    {
        $role = new Role;
        $role->create($request->except('_token'));
        return redirect(route('admin.role.index'));
    }
}
