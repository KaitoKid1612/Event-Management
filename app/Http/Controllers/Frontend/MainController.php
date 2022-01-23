<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Event\EventService;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\FunctionNode;

class MainController extends Controller
{

    public $name;
    public $class_id;
    public $phone;
    public $gender;
    public $dob;

    protected $event;

    public function __construct(EventService $event)
    {
        $this->event=$event;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.home', [
            'title' => 'Trang Chủ',
            'events'=>$this->event->get()
        ]);
    }

    public function profile()
    {
        $user = Student::find(Auth::user()->id);
        return view('frontend.users.profile',[
            'title' => 'Trang Thông Tin Cá Nhân',
            'user'=>$user
        ]);
    }

    public function edit()
    {
        $user = Student::find(Auth::user()->id);
        $this->name = $user->name;
        $this->class_id = $user->class_id;
        $this->phone = $user->phone;
        $this->gender = $user->gender;
        $this->dob = $user->dob;

        return view('frontend.users.edit',[
            'title' => 'Trang Thông Tin Cá Nhân',
            'user'=>$user
        ]);
    }

    public function updateProfile()
    {
        $user = Student::find(Auth::user()->id);
        $user->name = $this->name;
        $user->class_id = $this->class_id;
        $user->phone = $this->phone;
        $user->gender = $this->gender;
        $this->dob = $user->dob;
        $user->save();
        session()->flash('message','Cật Nhật Thành Công');
    }
}
