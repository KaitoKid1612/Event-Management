$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function loadMore()
{
    const page = $('#page').val();
    $.ajax({
        type:'POST',
        dataType:'JSON',
        data:{page},
        url:'/services/load-event',
        success:function(result){
            if (result.html != ''){
                $('#loadEvent').append(result.html);
                $('#page').val(page + 1);
            } else {
                alert('Đã Load Hết Danh Sách Sự Kiện');
                $('#button-loadMore').css('display', 'none');
            }
        }
    })
}