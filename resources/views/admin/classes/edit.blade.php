@extends('admin.main')

@section('content')
    <form action="{{route('classes.update', ['id'=>$classes->id])}}" method="POST">
        <div class="card-body">
           
            <div class="form-group">
                <label for="">Lớp</label>
                <input type="text" name="name" class="form-control" value="{{$classes->name}}" placeholder="Nhập tên">
            </div>

            <div class="form-group">
                <label for="">Tên Giáo Viên Chủ Nhiệm</label>
                <input type="text" name="teacher_name" class="form-control" value="{{$classes->teacher_name}}" placeholder="Nhập tên">
            </div>
                        
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo</button>
        </div>
        @csrf
    </form>
@endsection
