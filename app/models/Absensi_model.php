<?php

class Absensi_model
{

    private $table = 'tb_absen';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllAbsen()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAbsenById($id)
    {
        $this->db->query('SELECT * FROM ' .  $this->table  . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahAbsen($data)
    {
        $query = "INSERT INTO db_absen
                   VALUES 
                   ('', :nama, :no_absen, :status_kehadiran, :keterangan)";

        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no_absen', $data['no_absen']);
        $this->db->bind('status_kehadiran', $data['status_kehadiran']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusAbsen($id)
    {
        $query = "DELETE FROM db_absen WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editAbsen($data)
    {
        // var_dump($data);
        $query = "UPDATE db_absen SET
                    nama = :nama,
                    no_absen = :no_absen,
                    status_kehadiran = :status_kehadiran,
                    keterangan = :keterangan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no_absen', $data['no_absen']);
        $this->db->bind('status_kehadiran', $data['status_kehadiran']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariAbsen()
    {

        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM db_absen 

                  WHERE 

                  nama LIKE :keyword OR
                  no_absen LIKE :keyword OR
                  status_keterangan LIKE :keyword OR
                  keterangan LIKE :keyword

                  ";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
