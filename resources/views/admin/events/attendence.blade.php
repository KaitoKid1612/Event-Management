@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sự Kiện</th>
            <th>Nội dung</th>
            <th>Địa chỉ</th>
            <th>Điểm danh</th>
            <th style="width: 80px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($eventNow as $key => $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->content }}</td>
                <td>{{ $event->address }}</td>
                <td><button class="btn btn-warning" onclick="window.open('{{route('attendence_view')}}?id={{$event->id}}','_self')">Điểm Danh</button></td>

                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/events/diemdanh/{{ $event->id }}">
                        {{-- <i class="fas fa-clipboard-user"></i> --}}Thống Kê
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