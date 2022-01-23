@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sự Kiện</th>
            <th>Hình Ảnh</th>
            <th>Minh Chứng</th>
            <th>Nội dung</th>
            <th>Địa chỉ</th>
            <th>Ngày SV Bắt đầu đăng ký</th>
            <th>Ngày Tổ Chức Sự Kiện</th>
            <th>Ngày Kết Thúc Sự Kiện</th>
            <th>Số Lượng SV</th>
            <th>Số Lượng GV</th>
            <th>Thể Loại</th>
            {{-- <th>Người tổ chức</th> --}}
            <th>Trạng thái</th>
            <th style="width: 80px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($eventNow as $key => $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td><img src="{{ $event->thumb }}" width="70px" height="70px" alt="IMG"></td>
                <td><img src="{{ $event->thumb_active }}" width="70px" height="70px" alt="IMG"></td>
                <td>{{ $event->content }}</td>
                <td>{{ $event->address }}</td>
                <td>{{ $event->date_sign_up }}</td>
                <td>{{ $event->date_begin }}</td>
                <td>{{ $event->date_end }}</td>
                <td>{{ $event->number_student }}</td>
                <td>{{ $event->number_teacher }}</td>

                
                <td>{!! \App\Helpers\Helper::active($event->active) !!}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/events/edit/{{ $event->id }}">
                        <i class="nav icon fas fa-pen-fancy"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $event->id }}, '/admin/events/destroy')">
                       <i class="nav icon fas fa-trash-restore"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

     {{--<div class="card-footer clearfix">
        {!! $event->links() !!}
    </div> --}}
@endsection