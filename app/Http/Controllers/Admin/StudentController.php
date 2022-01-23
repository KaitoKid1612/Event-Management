<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    protected $student;
    protected $classe;

    public function __construct(Student $student, Classe $classe)
    {
        $this->student = $student;
        $this->classe = $classe;
    }

    public function create()
    {
        $classes = $this->classe->all();
        return view('admin.students.add',[
            'title'=>'Tạo Tài Khoản Sinh Viên'
        ], compact('classes'));
    }

    public function index()
    {
        $classes = $this->classe->all();
        $students = $this->student->paginate(10);
        return view('admin.students.list',[
            'title'=>'Danh Sách Sinh Viên'
        ], compact('students','classes'));
    }
}
