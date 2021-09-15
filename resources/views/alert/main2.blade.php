<form action="" method="POST" id="update-form">
@csrf 
@method('PUT') 
</form>
<script>
    $(document).ready(function () {
        $('.update-btn').on('click', function (e) {
            e.preventDefault();
            var href = $(this).attr('href');
            swal({
            title: "Apakah yakin ingin menerima laporan ini?",
            text: "Setelah diapprove maka akan Tampil Pada page Laporan",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            });
            .then((willUpdate) => {
                if(willUpdate){
                    swal("Data Di Approve", "Sekarang bisa di cek pada page kritik", "success");
                    $('#update-form').attr(action,'href').submit();
                } else{
                    swal("Data belum di Proses");
                }
            })
        })
    })
</script>