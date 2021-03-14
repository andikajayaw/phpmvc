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

    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e);
        }
    }

    public function getAllMahasiswa() {
        // return $this->mhs;
        $query = "SELECT * FROM mahasiswa";
        $this->stmt = $this->dbh->prepare($query);
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}