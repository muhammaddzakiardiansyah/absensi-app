<?php

 class Absensi extends Controller {

     private $iconSuccess = 'class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" widht="50px"',
             $iconDanger = 'class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"';
        
    public function index() {
        $data['judul'] = 'Absensi Siswa';
        $data['absensi'] = $this->model('absensi.model')->getAllAbsen();

        $this->view('templates/header', $data);
        $this->view('absensi/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Absensi';
        $data['swa'] = $this->model('absensi.model')->getAbsenById($id);

        $this->view('templates/header', $data);
        $this->view('absensi/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if( $this->model('absensi.model')->tambahAbsen($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', $this->iconSuccess, '#check-circle-fill');
            header('Location: ' . BASEURL . '/absensi');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger', $this->iconDanger, '#exclamation-triangle-fill');
            header('Location: ' . BASEURL . '/absensi');
            exit;
        }
    }

    public function hapus($id) {
        if( $this->model('absensi.model')->hapusAbsen($id) > 0 ) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success', $this->iconSuccess, '#check-circle-fill');
            header('Location: ' . BASEURL . '/absensi');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger', $this->iconDanger, '#exclamation-triangle-fill');
            header('Location: ' . BASEURL . '/absensi');
            exit;
        }
    }

    public function getUbah() {
        
       echo json_encode($this->model('absensi.model')->getAbsenById($_POST['id']));
   
    }

    public function edit() {

        // var_dump($_POST);

        if( $this->model('absensi.model')->editAbsen($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success', $this->iconSuccess, '#check-circle-fill');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger', $this->iconDanger, '#exclamation-triangle-fill');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }

    }

    public function cari() {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('absensi.model')->cariAbsen();

        $this->view('templates/header', $data);
        $this->view('absensi/index', $data);
        $this->view('templates/footer');
    }

 }