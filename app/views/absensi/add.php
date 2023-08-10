<div class="container mt-5">
  <div class="border border-white p-4 mb-2">
    <div class="form-input">
      <h2 class="px-5 title text-white">Tambah Absen</h2>
      <form action="<?= BASEURL; ?>/absensi/add" method="post" class="px-5 form">
        <div class="mb-3">
          <label for="nama" class="form-label text-white">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" required>
          <div id="nama" class="form-text text-white">Isi dengan nama panjangmu</div>
        </div>
        <div class="mb-3">
          <label for="absen" class="form-label text-white">Absen</label>
          <input type="text" class="form-control" id="absen" name="no_absen" required>
          <div id="nama" class="form-text text-white">Isi dengan no. absenmu</div>
        </div>
        <button type="submit" class="btn btn-success mt-5"><i class="bi bi-file-diff"></i> Tambah</button>
        <a class=" btn btn-primary mt-5 text-decoration-none" href="<?= BASEURL; ?>/absensi"><i class="bi bi-box-arrow-left"></i> Kembali</a>
      </form>
    </div>
  </div>
</div>