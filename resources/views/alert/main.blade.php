<form action="" method="POST" id="delete-form">
        @method('DELETE')
        @csrf
</form> 
<script>
    $(document).ready(function(){
        $('.delete-btn').on('click', function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            swal({
                title: "Hapus data?",
                text: "Data yang di hapus tidak dapat di kembalikan!", 
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                  swal("Data Berhasil Dihapus", {
                    icon: "success",
                  });
                $('#delete-form').attr('action',href).submit();
              }else{
                  swal("Data Tetap Aman");
              }
            });
        });
    });
</script>
