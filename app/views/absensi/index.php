<div class="container mt-3">
    <!-- icon href -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <!-- pesan crud -->
    <div class="row">
        <div class="col-md-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <!-- tambah data siswa -->
    <div class="row">
        <div class="col-md-6">
        <button type="button" class="btn btn-primary tombolTambahData mt-4" data-bs-toggle="modal" data-bs-target="#formModal" id="tombolTambahData">
                Tambah Data Siswa
            </button>
        </div>
    </div>
    <!-- cari data siswa -->
    <div class="row mt-2">
        <div class="col-md-6">
           <form action="<?= BASEURL ?>/siswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="search" class="form-control" placeholder="Cari data siswa!" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-success" type="submit" id="tombolCari">Cari!</button>
                </div>
        </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Daftar Siswa</h3>
            <!-- table data siswa -->
            <?php foreach ($data['siswa'] as $swa) : ?>
                <div class="list-group mt-3">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <?= $swa['nama']; ?>
                        </div>
                        <a href="<?= BASEURL; ?>//siswa/detail/<?= $swa['id']; ?>" class="badge bg-primary rounded-pill item-action me-1">Detail</a>
                        <a href="<?= BASEURL; ?>//siswa/edit/<?= $swa['id']; ?>" class="badge bg-success rounded-pill item-action tampilModalEdit me-1 " data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $swa['id']; ?>">Edit</a>
                        <a href="<?= BASEURL; ?>//siswa/hapus/<?= $swa['id']; ?>" class="badge bg-danger rounded-pill item-action" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </li>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nis</label>
                        <input type="text" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option selected></option>
                        <option value="Rekayasa perangkat lunak">Rekayasa perangkat lunak</option>
                        <option value="Tata busana">Tata busana</option>
                        <option value="Teknik komputer jaringan">Teknik komputer jaringan</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>