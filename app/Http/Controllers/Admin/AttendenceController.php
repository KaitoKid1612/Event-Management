<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class AttendenceController extends Controller
{
    //
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function index(Request $request)
    {
        //Nhung su kien dang dien ra
        $mytime = Carbon::now();
        $mytime->toDateTimeString();
        
        $eventNow = DB::table('events')
            ->where('date_sign_up', '<=', $mytime)
            ->where('date_begin', '<=', $mytime)
            ->where('date_end', '>=', $mytime)
            ->get();

            return view('admin.events.attendence', [
                'title'=>'Sự Kiện Đang Diễn Ra',
                'eventNow'=>$eventNow
            ]);

    }

    public function view(Request $request)
    {
        //check du lieu xem co dung ko
        $events = DB::table('events')
            ->where('id', $request->id)
            ->get();
            if($events != null && count($events) > 0){
                $events = $events[0];
            } else {
                return redirect()->route('attendence_index');
            }

        //danh sach sinh vien dang ki su kien
        $mytime = Carbon::now();
        $mytime->toDateTimeString();

        $edit = DB::table('diemdanhs')
            ->leftJoin('students', 'students.roll_no', '=', 'diemdanhs.roll_no')
            ->where('diemdanhs.id_event', $request->id)
            ->where('diemdanhs.created_at', '>=', $mytime)
            ->select('diemdanhs.*', 'students.name')
            ->get();

        $students=$this->student->get();
        $studentList = null;
        if($edit != null|| count($edit) == 0){
            $studentList = DB::table('carts')
                ->where('event_id', $events->id)
                ->get();
        }

        return view('admin.events.view',[
            'title' => 'Điểm Danh',
            'index' => 1,
            'events' => $events,
            'studentList' => $studentList,
            'edit' => $edit,
            'students' => $students
        ]);
    }

    public function post(Request $request) {
		$mytime = Carbon::now();
        $mytime->toDateTimeString();

		$id_event  = $request->id_event;
		$data        = json_decode($request->data, true);

		//check du lieu da ton tai chua
        
        $edit = DB::table('diemdanhs')
        ->leftJoin('students', 'students.roll_no', '=', 'diemdanhs.roll_no')
        ->where('diemdanhs.id_event', $request->id)
        ->where('diemdanhs.created_at', '>=', $mytime)
        ->select('diemdanhs.*', 'students.name')
        ->get();

		if ($edit != null && count($edit) > 0) {
			//update
			foreach ($data as $item) {
				DB::table('diemdanhs')
					->where('id_event', $request->id)
					->where('created_at', '>=', $mytime)
					->where('roll_no', $item['roll_no'])
					->update([
						'status'     => $item['status'],
						'note'       => $item['note'],
						'updated_at' => $mytime
					]);
			}
			return redirect()->route('attendence_index');
		}

		//Them moi.
		foreach ($data as $item) {
			DB::table('diemdanhs')->insert([
					'id_event' => $id_event,
					'roll_no'     => $item['roll_no'],
					'status'     => $item['status'],
					'note'       => $item['note'],
					'created_at' => $mytime,
					'updated_at' => $mytime
				]);
		}
		return redirect()->route('attendence_index');
	}

    public function end()
    {
        //Nhung su kien da ket thuc
        $mytime = Carbon::now();
        $mytime->toDateTimeString();
        
        $eventNow = DB::table('events')
            ->where('date_end', '<=', $mytime)
            ->get();

            return view('admin.events.end', [
                'title'=>'Sự Kiện đã kết thúc',
                'eventNow'=>$eventNow
            ]);
    }
}
