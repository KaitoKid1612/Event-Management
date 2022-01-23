@extends('admin.main')

@section('content')
    <div class="content-wrapper" style=" margin-left: 0px;">

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('roles.update', ['id'=>$role->id]) }}" method="post" enctype="multipart/form-data" style="width: 100%;">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label style="margin-top: 10px;">Tên vai trò</label>
                                <input type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="Nhập tên vai trò"
                                    value="{{ $role->name }}"
                                >

                            </div>

                            <div class="form-group">
                                <label>Mô tả vai trò</label>

                                <textarea
                                    class="form-control"
                                    name="display_name" rows="4">{{ $role->display_name }}</textarea>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        <input type="checkbox" class="checkall">
                                        checkall 
                                    </label>
                                </div>

                                @foreach($permissionsParent as $permissionsParentItem)
                                    <div class="card border-primary mb-3 col-md-12">
                                        <div class="card-header">
                                            <label>
                                                <input type="checkbox" value="" class="checkbox_wrapper">
                                            </label>
                                            Module {{ $permissionsParentItem->name }}
                                        </div>
                                        <div class="row">
                                            @foreach($permissionsParentItem->permissionsChildrent as $permissionsChildrentItem)
                                                <div class="card-body text-primary col-md-3">
                                                    <h5 class="card-title">
                                                        <label>
                                                            <input type="checkbox" name="permission_id[]"
                                                                {{$permissionsChecked->contains('id', $permissionsChildrentItem->id) ? 'checked' : ''}}
                                                                class="checkbox_childrent"
                                                                value="{{ $permissionsChildrentItem->id }}">
                                                        </label>
                                                        {{ $permissionsChildrentItem->name }}
                                                    </h5>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tạo</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection