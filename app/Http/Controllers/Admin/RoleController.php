<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    private $role;
    private $permission;
    public function __construct(Role $role, Permission $permission)
    {
        $this->role=$role;
        $this->permission=$permission;
    }
    //
    public function index()
    {
        $roles=$this->role->paginate(10);
        return view('admin.roles.list',[
            'title'=>'Trang Danh Sách Vai Trò'
        ], compact('roles'));
    }

    public function create()
    {
        $permissionsParent = $this->permission->where('parent_id', 0)->get();
        return view('admin.roles.add', [
            'title'=>'Thêm vai trò'
        ], compact('permissionsParent'));
    }

    public function store(Request $request)
    {
        $role=$this->role->create([
            'name'=>$request->name,
            'display_name'=>$request->display_name
        ]);

        $role->permissions()->attach($request->permission_id);
        return redirect()->route('roles.list');
    }

    public function edit($id)
    {
        $permissionsParent = $this->permission->where('parent_id', 0)->get();
        $role=$this->role->find($id);
        $permissionsChecked = $role->permissions; 
        return view('admin.roles.edit', [
            'title'=>'Chỉnh sửa vai trò'
        ], compact('permissionsParent', 'role', 'permissionsChecked'));
    }

    public function update(Request $request,$id)
    {
        $role = $this->role->find($id);
        $role->update([
            'name'=>$request->name,
            'display_name'=>$request->display_name
        ]);

        $role->permissions()->sync($request->permission_id);
        return redirect()->route('roles.list');
    }
}
