@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            
            <div class="form-group">
                <label for="event">Tên Sự Kiện</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}"  placeholder="Nhập tên loại sự kiện">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Sự Kiện</label>
                <input type="file"  class="form-control" id="upload">
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="thumb">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Xác Nhận</label>
                <input type="file"  class="form-control" id="upload_active">
                <div id="image_show_active">

                </div>
                <input type="hidden" name="thumb_active" id="thumb_active">
            </div>

            <div class="form-group">
                <label>Ngày Đăng Kí</label></br>
                <input type="datetime-local" id="date_sign_up" value="{{old('date_sign_up')}}" name="date_sign_up">
            </div>

            <div class="form-group">
                <label>Ngày Bắt Đầu Sự Kiện</label></br>
                <input type="datetime-local" id="date_begin" value="{{old('date_begin')}}" name="date_begin">
            </div>

            <div class="form-group">
                <label>Ngày Kết Thúc Sự Kiện</label></br>
                <input type="datetime-local" id="date_end" value="{{old('date_end')}}" name="date_end">
            </div>
            
            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" name="address" class="form-control" value="{{old('address')}}" placeholder="Nhập địa chỉ">
            </div>

            <div class="form-group">
                <label>Số Lượng Sinh Viên</label>
                <input type="number" name="number_student" value="{{old('number_student')}}"  class="form-control" >
            </div>

            <div class="form-group">
                <label>Số Lượng Giảng Viên</label>
                <input type="number" name="number_teacher" value="{{old('number_teacher')}}"  class="form-control" >
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
                <label>Người Phụ Trách</label>
                <select class="form-control" name="teacher_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Điểm sự kiện</label>
                <input type="text" name="score" value="{{old('score')}}"  class="form-control" >
            </div>
    
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>
            
            <div class="form-group">
                <label>Trạng thái hoạt động</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>
    
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Sự Kiện</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection



