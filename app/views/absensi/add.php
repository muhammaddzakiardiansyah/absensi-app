<div class="container-fluid mt-5">
       <div class="form-input">
        <h2 class="px-5 title">Tambah Absen</h2>
            <form action="<?= BASEURL; ?>/absensi/add" method="post" class="px-5 form">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama">
                  <div id="nama" class="form-text">Isi dengan nama panjangmu</div>
                </div>
                <div class="mb-3">
                  <label for="absen" class="form-label">Absen</label>
                  <input type="text" class="form-control" id="absen" name="no_absen">
                  <div id="nama" class="form-text">Isi dengan no. absenmu</div>
                </div>
                <button type="submit" class="btn btn-success mt-5">Tambah</button>
                <button type="submit" class="btn btn-primary mt-5">Kembali</button>
              </form>
       </div>
</div>