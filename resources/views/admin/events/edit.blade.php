@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="event">Tên Sự Kiện</label>
                <input type="text" name="name" class="form-control" value="{{ $event->name}}"  placeholder="Nhập tên loại sự kiện">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Sự Kiện</label>
                <input type="file"  class="form-control" id="upload">
                <div style="margin-top:25px" id="image_show">
                    <a href="{{ $event->thumb }}" target="_blank">
                        <img src="{{ $event->thumb }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb" value="{{ $event->thumb }}" id="thumb">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Xác Nhận</label>
                <input type="file"  class="form-control" id="upload_active">
                <div style="margin-top:25px" id="image_show">
                    <a href="{{ $event->thumb_active }}" target="_blank">
                        <img src="{{ $event->thumb_active }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb_active" value="{{ $event->thumb_active }}" id="thumb_active">
            </div>

            <div class="form-group">
                <label>Ngày Đăng Kí</label></br>
                <td>{{ $event->date_sign_up }}</td>
                <input type="datetime-local" id="date_sign_up" name="date_sign_up">
            </div>

            <div class="form-group">
                <label>Ngày Bắt Đầu Sự Kiện</label></br>
                <td>{{ $event->date_begin }}</td>
                <input type="datetime-local" id="date_begin" name="date_begin">
            </div>

            <div class="form-group">
                <label>Ngày Kết Thúc Sự Kiện</label></br>
                <td>{{ $event->date_end }}</td>
                <input type="datetime-local" id="date_end" value="{{$event->date_end}}" name="date_end">
            </div>
            
            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" name="address" class="form-control" value="{{$event->address}}" placeholder="Nhập địa chỉ">
            </div>

            <div class="form-group">
                <label>Số Lượng Sinh Viên</label>
                <input type="number" name="number_student" value="{{$event->number_student}}"  class="form-control" >
            </div>

            <div class="form-group">
                <label>Số Lượng Giảng Viên</label>
                <input type="number" name="number_teacher" value="{{$event->number_teacher}}"  class="form-control" >
            </div>
            
            <div class="form-group">
                <label>Loại Sự Kiện</label>
               <select class="form-control" name="menu_id">
                    @foreach($menus as $menu)
                        {{-- @php
                            $diem = $menu->number;  
                        @endphp --}}
                        <option value="{{ $menu->id }}">{{ $menu->name }} - {{$menu->number}} điểm</option>
                    @endforeach
                </select>
            </div>
    
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea name="content" id="content" valu class="form-control">{{ $event->content }}</textarea>
            </div>
            
            <div class="form-group">
                <label>Trạng thái hoạt động</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                        {{ $event->active == 1 ? ' checked=""' : '' }}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                        {{ $event->active == 0 ? ' checked=""' : '' }}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div> 
    
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection



