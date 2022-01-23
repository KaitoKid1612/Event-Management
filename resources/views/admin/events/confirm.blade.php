@extends('admin.main')

@section('content')
    <table class="table" id="confirm_table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sự Kiện</th>
            <th>Minh Chứng</th>
            <th>Thể Loại</th>
            {{-- <th>Người tổ chức</th> --}}
            <th>Trạng thái</th>
            <th>Xét duyệt</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($events as $key => $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td><img src="{{ $event->thumb_active }}" width="70px" height="70px" alt="IMG"></td>
                <td>{{ !empty($event->menu) ? $event->menu->name:'' }}</td>
                <td>{!! \App\Helpers\Helper::active($event->active) !!}</td>
                <td style="display: flex">
                    @if ($event->active == 1)
                        <a href="{{route('updateActive', ['event_id' => $event->id,
                        'active_code' => 0])}}" class="btn btn-danger m-2">
                        <i class="fa fa-ban"></i></a>
                    @else 
                        <a href="{{route('updateActive', ['event_id' => $event->id,
                        'active_code' => 1])}}" class="btn btn-success m-2">
                        <i class="fa fa-check"></i></a>
                    @endif
                    
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    

    {{-- <div class="card-footer clearfix">
        {!! $events->links() !!}
    </div> --}}
@endsection