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
        <a href="<?= BASEURL; ?>/absensi/add" class="btn position-relative fw-semibold">
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
                        <td><?= $formattedTime ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/absensi/detail/<?= $absen['id'] ?>" class="badge text-bg-info text-decoration-none text-white"><i class="bi bi-eye"></i> Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <!-- end table absen -->
</div>
<!-- end main -->