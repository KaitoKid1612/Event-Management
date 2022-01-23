@extends('admin.main')

@section('content')

    <div class="content-wrapper" style="margin-left: unset;">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/admin/students/create" class="btn btn-success float-right m-2">+</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mã Sinh Viên</th>
                                <th scope="col">Họ Và Tên</th>
                                <th scope="col">Giới Tính</th>
                                <th scope="col">Email</th>
                                <th scope="col">Số Điện Thoại</th>
                                <th scope="col">Địa Chỉ</th>
                                <th scope="col">Điểm Tích Lũy</th>
                                {{-- <th scope="col">Lớp</th> --}}
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($students as $student)

                                <tr>
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->roll_no }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->score }}</td>
                                    {{-- <td>{{ $student->classes->name }}</td> --}}
                                    <td>
                                        <a href="{{ route('students.edit', ['id'=>$student->id])}}"
                                           class="btn btn-default">Chỉnh Sửa</a>
                                        <a href="{{ route('students.delete', ['id' => $student->id]) }}"
                                           {{-- href="{{ route('users.delete', ['id' => $user->id]) }}" --}}
                                           class="btn btn-danger">Xóa</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $students->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
