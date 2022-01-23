@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên Loại Sự Kiện</label>
                <input type="text" name="name" class="form-control"  placeholder="Nhập tên loại sự kiện">
            </div>
            
            <div class="form-group">
                <label>Điểm Tích Luỹ </label>
                <input type="number" name="number" value=""  class="form-control" >
            </div>
    
            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>
    
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo Loại Sự Kiện</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection