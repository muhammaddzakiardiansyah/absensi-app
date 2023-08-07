<?php

 class Flasher {



    public static function setFlash($pesan, $aksi, $tipe, $icon, $href) {
        $_SESSION['flash'] = [
            "pesan" => $pesan,
            "aksi" => $aksi,
            "tipe" => $tipe,
            "icon" => $icon,
            "href" => $href
        ];
    }

    public static function flash() {
        if( isset($_SESSION['flash']) ) {
           echo '
           <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
            
           <div><svg ' . $_SESSION['flash']['icon'] . '><use xlink:href="' . $_SESSION['flash']['href']  . '" /></svg> Data Siswa <strong>' . $_SESSION['flash']['pesan']  . '!</strong> ' . $_SESSION['flash']['aksi']  . '</div>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
               ';

         unset($_SESSION['flash']);

        } 
    }
 }