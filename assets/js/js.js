<script>
    $(function () {
    $('#edit-data').click(function (e) {
            e.preventDefault();
            $('#modal').modal({
                backdrop: 'static',
                show: true
            });
            id = $(this).data('id');
            // mengambil nilai data-id yang di click
            $.ajax({
                url: 'profile/edit/' + id,
                success: function (data) {
                    $("input[name='id']").val(data.id);
                    $("input[name='nama']").val(data.nama);
                    $("textarea[name='alamat']").val(data.alamat);
                    $("textarea[name='telepon']").val(data.telepon);
                }
            });
       });
}
</script>