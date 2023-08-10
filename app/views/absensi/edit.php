<div class="container mt-5 mb-5">
    <div class="border border-white p-4 mb-2">
        <div class="form-input">
            <h2 class="px-5 title text-white">Edit Absen</h2>
            <form action="<?= BASEURL; ?>/absensi/edit/<?= $data['absen']['id']; ?>" method="post" class="px-5 form">
                <div class="mb-3">
                    <input type="text" value="<?= $data['absen']['id']; ?>" name="id" hidden>
                    <label for="nama" class="form-label text-white">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value="<?= $data['absen']['nama']; ?>">
                    <div id="nama" class="form-text text-white">Isi dengan nama panjangmu</div>
                </div>
                <div class="mb-3">
                    <label for="absen" class="form-label text-white">Absen</label>
                    <input type="text" class="form-control" id="absen" name="no_absen" value="<?= $data['absen']['no_absen']; ?>">
                    <div id="nama" class="form-text text-white">Isi dengan no. absenmu</div>
                </div>
                <div class="mb-3">
                    <label for="status_kehadiran" class="form-label text-white">Status Kehadiran</label>
                    <select class="form-select" name="status_kehadiran" id="status_kehadiran" aria-label="Default select example">
                        <option selected><?= $data['absen']['status_kehadiran']; ?></option>
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak Hadir">Tidak Hadir</option>
                    </select>
                    <div id="nama" class="form-text text-white">Isi dengan status kehadiranmu</div>
                </div>
                <div class="mb-3"> 
                    <label for="keterangan" class="form-label text-white">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $data['absen']['keterangan']; ?>">
                    <div id="nama" class="form-text text-white">Isi dengan keteranganmu</div>
                    <input type="text" value="<?= $data['absen']['created_at']; ?>" name="created_at" hidden>
                </div>
                <div class="mb-3">
                    <label for="pin" class="form-label text-white">Pin</label>
                    <input type="password" class="form-control" id="pin" name="pin" required>
                    <div id="pin" class="form-text text-white">Isi dengan pin khusus</div>
                </div>
                <button type="submit" class="btn btn-success mt-5"><i class="bi bi-file-diff"></i> Simpan</button>
                <a class=" btn btn-primary mt-5 text-decoration-none" href="<?= BASEURL; ?>/absensi/detail/<?= $data['absen']['id'] ?>"><i class="bi bi-box-arrow-left"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>