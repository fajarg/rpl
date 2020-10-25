function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#DeleteModal').modal();
}

$(function () {
    $('#btn-info-category').click(function (e) {
            e.preventDefault();
            $('#InfoCateModal').modal({
                backdrop: 'static',
                show: true
            });
            id = $(this).data('id');
            // mengambil nilai data-id yang di click
            $.ajax({
                url: 'menu/detailCategory/' + id,
                success: function (data) {
                    $("input[name='name-info']").val(data.id);
                    $("textarea[name='name-info']").val(data.alamat);
                }
            });
       });
}