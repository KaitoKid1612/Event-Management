@extends('admin.main')

@section('content')

    <div class="content-wrapper" style="margin-left: unset;">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/admin/users/create" class="btn btn-success float-right m-2"> Thêm</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">email</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)

                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>

                                    <td>
                                        <a href="{{ route('users.edit', ['id'=>$user->id])}}"
                                           class="btn btn-default">Chỉnh Sửa</a>
                                        <a href="{{ route('users.delete', ['id' => $user->id]) }}"
                                           {{-- href="{{ route('users.delete', ['id' => $user->id]) }}" --}}
                                           class="btn btn-danger">Xóa</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
