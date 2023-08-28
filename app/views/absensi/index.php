<!-- CONFERT MONTH ING TO IND -->
<?php
 function bulanIndonesia($bulan) {
    $bulanArr = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    );
    return $bulanArr[$bulan];
}

// CONFERT DAY ING TO IND

function hariIndonesia($hari) {
    $hariArr = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    );
    return $hariArr[$hari];
}

// FUNCTION DAY MOUNT

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('d-m-Y');
$tanggalObj = new DateTime($tanggal);
$tanggalFormatted = hariIndonesia($tanggalObj->format('l')) . ', ' . $tanggalObj->format('d') . ' ' . bulanIndonesia($tanggalObj->format('n')) . ' ' . $tanggalObj->format('Y');
?>

<!-- main -->
<div class="container mt-5">
    <!-- alert -->
    <div class="row">
        <div class="col-md-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <!-- end alert -->
    <h2 class="text-center text-white">Daftar Absen XII RPL 1</h2>
    <!-- tambah absen -->
    <div class="button mb-3 d-flex justify-content-end">
        <a href="<?= BASEURL; ?>/absensi/add" class="btn position-relative fw-semibold" style="background-color: #53e420;">
        <i class="bi bi-file-diff"></i> Tambah Absen
        </a>
    </div>
    <!-- end tambah absen -->
    <!-- table absen -->
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">No. Absen</th>
                <th scope="col">Status</th>
                <th scope="col">Waktu Hadir</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!$data['absensi']) : ?>
                <tr>
                    <td colspan="6"><h4 class="text-center fw-semibold">Belum ada yang hadir hari ini</h4></td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($data['absensi'] as $absen) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $absen['nama'] ?></td>
                        <td><?= $absen['no_absen'] ?></td>
                        <td><span class="badge rounded-pill <?php if($absen['status_kehadiran'] == "Pending") {
                            echo "text-bg-warning text-white";
                        } elseif($absen['status_kehadiran'] == "Hadir") {
                            echo "text-bg-success";
                        } else {
                            echo "text-bg-danger";
                        } ?>"><?= $absen['status_kehadiran'] ?></span></td>
                        <?php
                        $timestamp = $absen['created_at'];
                        $dateTime = new DateTime($timestamp);
                        $formattedTime = $dateTime->format('H:i');
                        ?>
                        <td><?php if($absen['status_kehadiran'] == "Tidak Hadir") {
                            echo "-";
                        } else {
                            echo $formattedTime;
                        } ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/absensi/detail/<?= $absen['id'] ?>" class="badge text-bg-info text-decoration-none text-white"><i class="bi bi-eye"></i> Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <p class="text-white fw-semibold">Absensi : <?= $tanggalFormatted ?></p>
    <a href="#" class="btn btn-danger fw-semibold delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i> Delete All</a>
    <!-- end table absen -->
</div>
<!-- end main -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Yakin tetap ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-box-arrow-left"></i> Tidak</button>
        <a href="<?= BASEURL; ?>/absensi/deleteAll" class="btn btn-primary"><i class="bi bi-trash3"></i> Ya</a>
      </div>
    </div>
  </div>
</div>


