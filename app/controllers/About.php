<?php

class About extends Controller {
    public function index($nama = 'user', $umur = '30', $profesi = 'orang hebat') {
         $data['judul'] = 'About me';
         $data['nama'] = $nama;
         $data['umur'] = $umur;
         $data['profesi'] = $profesi;
         
         $this->view('templates/header', $data);
         $this->view('about/index', $data);
         $this->view('templates/footer');
    }

    public function page() {
        $data['judul'] = 'pages';
        
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}