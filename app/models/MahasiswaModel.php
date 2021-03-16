<?php

class MahasiswaModel {
    // private $mhs = [
    //     [
    //         "nama" => "Andika Jaya",
    //         "nrp" => "12345678",
    //         "email" => "andikajayawiguna@gmail.com",
    //         "jurusan" => "Sistem Komputer"
    //     ],
    //     [
    //         "nama" => "Andika Jaya",
    //         "nrp" => "12345678",
    //         "email" => "andikajayawiguna@gmail.com",
    //         "jurusan" => "Sistem Komputer"
    //     ],
    //     [
    //         "nama" => "Andika Jaya",
    //         "nrp" => "12345678",
    //         "email" => "andikajayawiguna@gmail.com",
    //         "jurusan" => "Sistem Komputer"
    //     ],
    // ];
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {

        $query = "SELECT * FROM ".$this->table;
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getDetailMahasiswa($id) {

        $query = "SELECT * FROM ".$this->table ." WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
        // return $this->db->resultSet();
    }
}