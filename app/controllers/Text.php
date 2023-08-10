<?php

class Text extends Controller {
    public function about() {
        $data['judul'] = 'About';

        $this->view('templates/header', $data);
        $this->view('text/about');
        $this->view('templates/footer');
    }

    public function docs() {
        $data['judul'] = 'Dokumentasi';

        $this->view('templates/header', $data);
        $this->view('text/about');
        $this->view('templates/footer');
    }
}