@extends('admin.main')

@section('content')
    <form action="{{route('users.store')}}" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nhập tên">
            </div>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Nhập email">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" value="{{old('password')}}"  placeholder="Nhập mật khẩu">
            </div>

            <div class="form-group">
                <label for="">Chọn vai trò</label>
                <select name="role_id[]" class="form-control select2_init" multiple>
                    <option value=""></option>
                    @foreach ($roles as $role)     
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
    
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo</button>
        </div>
        @csrf
    </form>
@endsection
