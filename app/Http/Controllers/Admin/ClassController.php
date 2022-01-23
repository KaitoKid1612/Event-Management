<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    //
    protected $classe;

    public function __construct(Classe $classe)
    {
        $this->classe = $classe;
    }

    public function create()
    {
        return view('admin.classes.add',[
            'title'=>'Tạo Lớp Học Mới'
        ]) ;
    }

    public function store(Request $request)
    {
        try {
            Classe::create([
                'name' => (string)$request->input('name'),
                'teacher_name' => (string)$request->input('teacher_name'),
            ]);
            Session::flash('success', 'Tạo Loại Sự Kiện Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return redirect()->route('classes.list');
    }
    
    public function index()
    {
        $classes = $this->classe->paginate(10);
        return view('admin.classes.list',[
            'title'=>'Danh Sách Lớp Học'
        ], compact('classes'));
    }

    public function edit($id)
    {
        $classes=$this->classe->find($id);
        return view('admin.classes.edit',[
            'title'=>'Chỉnh Sửa Lớp Học'
        ], compact('classes'));
    }

    public function update(Request $request,$id)
    {
        $classes = $this->classe->find($id);
        $classes -> update([
            'name'=>$request->name,
            'teacher_name'=>$request->teacher_name
        ]);
        return redirect()->route('classes.list');
    }
}
