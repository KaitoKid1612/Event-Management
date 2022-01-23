@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Mã Loại Sự Kiện</th>
                <th style="width:140px">Tên Loại Sự Kiện</th>
                <th style="width:130px">Điểm Tích Luỹ</th>
                <th>Mô Tả Chi Tiết</th>
                <th>Update</th>
                <th>&nbsp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $key => $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->number }}</td>
                    <td>{{ $menu->content }}</td>
                    <td>{{ $menu->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/menus/edit/{{ $menu->id }}">
                            <i class="nav icon fas fa-pen-fancy"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"
                           onclick="removeRow({{ $menu->id }}, '/admin/menus/destroy')">
                           <i class="nav icon fas fa-trash-restore"></i>
                        </a>
                    </td>
                </tr>        
            @endforeach
        </tbody>
    </table>
@endsection