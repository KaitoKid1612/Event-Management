@extends('admin.main')

@section('content')

    <div class="content-wrapper" style="margin-left: unset;">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/admin/roles/create" class="btn btn-success float-right m-2"> +</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Vai Trò</th>
                                <th scope="col">Mô tả vai trò</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($roles as $role)

                                <tr>
                                    <th scope="row">{{ $role->id }}</th>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->display_name }}</td>

                                    <td>
                                        <a href="{{ route('roles.edit', ['id' => $role->id]) }}"
                                           class="btn btn-default">Chỉnh sửa</a>
                                        <a href=""
                                           data-url="{{ route('roles.delete', ['id' => $role->id]) }}"
                                           class="btn btn-danger action_delete">Xoá</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $roles->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
