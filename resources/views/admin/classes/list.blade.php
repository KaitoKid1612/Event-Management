@extends('admin.main')

@section('content')

    <div class="content-wrapper" style="margin-left: unset;">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/admin/classes/create" class="btn btn-success float-right m-2">+</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lớp</th>
                                <th scope="col">Tên Giáo Viên Chủ Nhiệm</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($classes as $classe)

                                <tr>
                                    <th scope="row">{{ $classe->id }}</th>
                                    <td>{{ $classe->name }}</td>
                                    <td>{{ $classe->teacher_name }}</td>

                                    <td>
                                        <a href="{{ route('classes.edit', ['id'=>$classe->id])}}"
                                           class="btn btn-default">Chỉnh Sửa</a>
                                        <a href="{{ route('classes.delete', ['id' => $classe->id]) }}"
                                           {{-- href="{{ route('users.delete', ['id' => $user->id]) }}" --}}
                                           class="btn btn-danger">Xóa</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $classes->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
