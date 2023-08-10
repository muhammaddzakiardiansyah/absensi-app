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
        date_default_timezone_set('Asia/Jakarta');
        $query = "INSERT INTO tb_absen
                   VALUES 
                   ('', :nama, :no_absen, :status_kehadiran, :keterangan, :created_at)";

        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no_absen', $data['no_absen']);
        $this->db->bind('status_kehadiran', isset($data['status_kehadiran']) ? $data['status_kehadiran'] : "Pending");
        $this->db->bind('keterangan', isset($data['keterangan']) ? $data['keterangan'] : "Belum ada keterangan");
        $this->db->bind('created_at', date("Y-m-d H:i:s"));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusAbsen($id)
    {
        $query = "DELETE FROM tb_absen WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editAbsen($data)
    {
        $query = "UPDATE tb_absen SET
                    nama = :nama,
                    no_absen = :no_absen,
                    status_kehadiran = :status_kehadiran,
                    keterangan = :keterangan,
                    created_at = :created_at
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no_absen', $data['no_absen']);
        $this->db->bind('status_kehadiran', $data['status_kehadiran']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
