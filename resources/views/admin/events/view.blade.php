@extends('admin.main')

@section('content')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Điểm Danh</h2>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>STT</th>
                    <th>Sự Kiện</th>
                    <th>Mã Sinh Viên</th>
                    <th>Tên Sinh Viên</th>
                    <th>Vắng Mặt</th>
                    <th>Tham Gia</th>
                    <th>Ghi Chú</th>
                </thead>
                <tbody>
                    @if ($studentList != null)
                    @foreach ($studentList as $item)
                    <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $events->name }}</td>
                    <td>{{ $item->roll_no }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <input type="radio" name="{{ $item->roll_no }}" value="0" class="form-control">
                    </td>
                    <td>
                        <input type="radio" name="{{ $item->roll_no }}" value="1" class="form-control" checked="true">
                    </td>
                    <th>
                        <input type="text" name="note_{{ $item->roll_no }}" class="form-control">
                    </th>
                    </tr>
                    @endforeach
                    @endif
                    @if ($edit != null && count($edit) > 0)
                    @foreach ($edit as $item)
                    <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $events->id }}</td>
                    <td>{{ $item->roll_no }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <input type="radio" name="{{ $item->roll_no }}" value="0" class="form-control" {{ ($item->status == 0)?'checked':'' }}>
                    </td>
                    <td>
                        <input type="radio" name="{{ $item->roll_no }}" value="1" class="form-control" {{ ($item->status == 1)?'checked':'' }}>
                    </td>
                    <th>
                        <input type="text" name="note_{{ $item->roll_no }}" class="form-control" value="{{ $item->note }}">
                    </th>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <button class="btn btn-warning" onclick="submitData()">Save</button>
        </div>
    </div>
</div>

<script type="text/javascript">
    function submitData() {
        //data json
        //array => object {'rollno', 'status', 'note'}
        //id_lichday
        statusList = jQuery('input[type=radio]:checked')
        data = []
        for(i=0;i<statusList.length;i++) {
            std = {
                'roll_no': jQuery(statusList[i]).attr('name'),
                'status': jQuery(statusList[i]).val(),
                'note': jQuery('[name=note_'+jQuery(statusList[i]).attr('name')+']').val()
            }
            data.push(std)
        }
        console.log(data)
        $.post('{{ route('attendence_post') }}', {
            '_token': "{{ csrf_token() }}",
            'id_event': {{ $events->id }},
            'data': JSON.stringify(data)
        }, function(dt) {
            location.reload()
        })
    }
</script>
@endsection