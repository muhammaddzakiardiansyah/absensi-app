<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['absen']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['absen']['no_absen']; ?></h6>
            <p class="card-text"><?= $data['absen']['status_kehadiran']; ?></p>
            <p class="card-text"><?= $data['absen']['keterangan']; ?></p>
            <a href="<?= BASEURL; ?>/absensi" class="card-link">Kembali</a>
        </div>
    </div>
</div>