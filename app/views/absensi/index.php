<!-- main -->
<div class="container mt-5">
        <h2 class="text-center text-white">Daftar Absen XII RPL 1</h2>
        <div class="button mb-3 d-flex justify-content-end">
            <a href="<?= BASEURL; ?>//absensi/add" class="btn position-relative fw-semibold">
                Tambah Absen
            </a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. Absen</th>
                    <th scope="col">Status</th>
                    <th scope="col">Waktu Hadir</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['absensi'] as $absen) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $absen['nama'] ?></td>
                        <td><?= $absen['no_absen'] ?></td>
                        <td><span class="badge rounded-pill text-bg-warning"><?= $absen['status_kehadiran'] ?></span></td>
                        <?php 
                           $timestamp = $absen['created_at'];
                           $dateTime = new DateTime($timestamp);
                           $formattedTime = $dateTime->format('H:i');
                        ?>
                        <td><?= $formattedTime ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/absensi/detail/<?= $absen['id'] ?>" class="badge text-bg-info text-decoration-none">Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- end main -->