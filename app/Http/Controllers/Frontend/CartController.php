<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Cart;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class CartController extends Controller
{
    //
    public function addEvent(Request $request)
    {
        $event_id = $request->input('event_id');
        $user_id = Auth::id();
        $students = Student::find($user_id);
        $name = $students->name;
        $roll_no = $students->roll_no;
        $class_id = $students->class_id; 
        
        if(Auth::check())
        {
            $event_check = Event::where('id', $event_id)->first();
            if($event_check)
            {
                if(Cart::where('event_id', $event_id)
                    ->where('user_id', Auth::id())
                    ->first())
                {
                    return response()->json(['status'=>"Đăng Kí Tham Gia Thành Công"]);
                } 
                else 
                {
                    $cartItem = new Cart();
                    $cartItem->event_id=$event_id;
                    $cartItem->user_id=Auth::id();
                    $cartItem->name=$name;
                    $cartItem->roll_no=$roll_no;
                    $cartItem->class_id=$class_id;
                    $cartItem->save();
                    return response()->json(['status'=>"Đăng Kí Tham Gia Thành Công"]);  
                }
               
            } 
            //  $exists = Arr::exists($cartItem, $event_id);
        }
        else 
        {
            return response()->json(['status'=> "Đăng Nhập Tài Khoản"]);
        }
    }

    public function active()
    {
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('frontend.users.active',[
            'title' => 'Trang Thông Tin Hoạt Động'
        ],compact('cartItem'));
    }
}
