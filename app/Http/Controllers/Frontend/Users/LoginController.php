<?php

namespace App\Http\Controllers\Frontend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('frontend.users.login', [
            'title' => 'Đăng Nhập Hệ Thống'
        ]);
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('frontend.home');
    }

    public function trangchu(Request $request)
    {
        $this->validate($request, [
            'roll_no' => 'required',
            'password' => 'required'
        ], [
            'roll_no.required'=>'Vui lòng nhập Mã sinh viên',
            'password.required'=>'Vui lòng nhập Password'
        ]
    );

        if (Auth::guard('student')->attempt($request->only('roll_no', 'password'),
            $request->has('remember'))){
                return redirect()->route('frontend.home');
            };

        Session::flash('error', 'Mã sinh viên hoặc Mật khẩu không đúng');
        return redirect()->back();
    }
 
}