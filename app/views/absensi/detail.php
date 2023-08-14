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

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('d-m-Y');
$tanggalObj = new DateTime($tanggal);
$tanggalFormatted = hariIndonesia($tanggalObj->format('l')) . ', ' . $tanggalObj->format('d') . ' ' . bulanIndonesia($tanggalObj->format('n')) . ' ' . $tanggalObj->format('Y');
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <h2 class="text-center text-white mb-4 mt-4">Detail Kehadiran Siswa</h2>
    <p class="text-white fw-semibold">Absensi : <?= $tanggalFormatted ?> </p>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">No.Absen</th>
                <th scope="col">Waktu Hadir</th>
                <th scope="col">Status Kehadiran</th>
                <th scope="col">keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?= $data['absen']['nama'] ?></td>
                <td><?= $data['absen']['no_absen'] ?></td>
                <?php
                    $timestamp = $data['absen']['created_at'];
                    $dateTime = new DateTime($timestamp);
                    $formattedTime = $dateTime->format('H:i');
                ?>
                <td><?php if($data['absen']['status_kehadiran'] == "Tidak Hadir") {
                      echo "-";
                } else {
                    echo $formattedTime;
                } ?></td>
                <td><span class="badge rounded-pill <?php if($data['absen']['status_kehadiran'] == "Pending") {
                            echo "text-bg-warning text-white";
                        } elseif($data['absen']['status_kehadiran'] == "Hadir") {
                            echo "text-bg-success";
                        } else {
                            echo "text-bg-danger";
                        } ?>"><?= $data['absen']['status_kehadiran'] ?></span></td>
                <td><?= $data['absen']['keterangan'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/absensi/edit/<?= $data['absen']['id']; ?>" class="badge text-bg-warning text-decoration-none text-white"><i class="bi bi-file-diff"></i> Edit</a> | <a href="#" class="badge text-bg-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i> Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
    <h5 class="mb-4 mt-4 text-white">Rating Kehadiranmu :</h5>
    <?php if($data['absen']['status_kehadiran'] == "Tidak Hadir") : ?>
        <h5 class="text-center text-white mt-4">Tidak ada rating, Siswa ini tidak hadir</h5>
    <?php elseif($data['absen']['status_kehadiran'] == "Pending") : ?>
        <h5 class="text-center text-white mt-4">Rating hanya bisa dilihat bagi siswa yang status kehadiranya "Hadir"</h5>
    <?php else : ?>
    <div class="rating">
        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar <?php if($formattedTime >= "07:00") {
                        echo "bg-danger";
                    } elseif($formattedTime >= "06:50") {
                        echo 'bg-warning';
                    } else {
                        echo 'bg-success';
                    } ?>" style="<?php if($formattedTime >= "07:00") {
                        echo "width: 20%";
                    } elseif($formattedTime >= "06:50") {
                        echo 'width: 50%';
                    } else {
                        echo 'width: 100%';
                    } ?>"><?php if($formattedTime >= "07:00") {
                        echo 'Kamu Terlambat!';
                    } elseif($formattedTime >= "06:50") {
                        echo 'Kamu Hampir Terlambat!';
                    } else {
                        echo 'Kamu Tidak terlambat!';
                    } ?></div>
        </div>
        <p class="fw-medium mt-3 text-center text-white">Pesan Untukmu : <?php if($formattedTime >= "07:00") {
                    echo "Berangkat lebih pagi lagi yaa!!";
                } elseif($formattedTime >= "06:50") {
                    echo 'Ayoo lebih awal lagi kamu hampir ketinggalan kelas!';
                } else {
                    echo 'Pertahankan yaa!';
                } ?></p>
        <p class="fw-medium mt-3 text-center text-white">Rating : <?php if($formattedTime >= "07:00") {
                    echo '20% <i class="bi bi-emoji-frown fs-5"></i>';
                } elseif($formattedTime >= "06:50") {
                    echo '50% <i class="bi bi-emoji-neutral fs-5"></i>';
                } else {
                    echo '100% <i class="bi bi-emoji-laughing fs-5"></i>';
                } ?></p>
    </div>
    <?php endif; ?>
    <div class="d-flex justify-content-end mt-5">
        <a class="btn btn-primary tombol" href="<?= BASEURL; ?>/absensi" class="card-link"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
</div>

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
        <a href="<?= BASEURL; ?>/absensi/delete/<?= $data['absen']['id']; ?>" class="btn btn-primary"><i class="bi bi-trash3"></i> Ya</a>
      </div>
    </div>
  </div>
</div>