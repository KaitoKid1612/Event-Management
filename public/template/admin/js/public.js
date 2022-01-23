
function actionDelete(event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);
    Swal.fire({
        title: 'Bạn thực sự muốn xoá?',
        text: "Xoá mà khồn thể khôi phục!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xoá'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'DELETE',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }

                },
                error: function () {

                }
            });
        }
    })

}

$(function () {
    $(document).on('click', '.action_delete', actionDelete);
});

