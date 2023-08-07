$(function() {


        $('.tombolTambahData').on('click', function() {

            $('#tombolTambahData').html('Tambah Data Siswa');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#nis').val('');
            $('#email').val('');
            $('#jurusan').val('');
           
        });

        // tambahan

        $('.tampilModalEdit').on('click', function() {
            
            $('#judulModalLabel').html('Ubah Data Siswa');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/edit');

            const id = $(this).data('id');
            
            $.ajax({

                url: 'http://localhost/phpmvc/public/siswa/getUbah',
                data: {id : id},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama)
                    $('#nis').val(data.nis)
                    $('#email').val(data.email)
                    $('#jurusan').val(data.jurusan)
                    $('#id').val(data.id)
                }

            })

        });



});