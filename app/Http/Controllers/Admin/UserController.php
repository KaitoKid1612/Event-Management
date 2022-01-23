<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $user;
    private $role;

    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }
    //
    public function index()
    {
        $users = $this->user->paginate(10);
        return view('admin.users.list',[
            'title'=>'Danh Sách Người Dùng'
        ], compact('users'));
    }

    public function create()
    {
        $roles = $this->role->all();
        return view('admin.users.add',[
            'title'=>'Thêm'
        ], compact('roles'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->route('users.list');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . '--- Line: ' . $exception->getLine());
        }
    }

    public function edit($id)
    {
        $roles = $this->role->all();
        $user = $this->user->find($id);
        $rolesOfUser = $user->roles;
        return view('admin.users.edit',[
            'title'=>'Chỉnh Sửa Người Dùng'
        ], compact('roles', 'user', 'rolesOfUser'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->user->find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('users.list');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . '--- Line: ' . $exception->getLine());

        }

    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->find($id);
            $user->delete($id);
            // return response()->json([
            //     'code' => 200,
            //     'message' => 'success'
            // ], 200);
            $user->roles->detach();
            DB::commit();
            return redirect()->route('users.list');
        } catch (\Exception $exception) {
            // Log::error('Message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
            // return response()->json([
            //     'code' => 500,
            //     'message' => 'fail'
            // ], 500);
            DB::rollBack();
        }
    }

}