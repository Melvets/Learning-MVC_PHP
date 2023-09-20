<?php 

class Siswa_model {
    // private $siswa = [
    //     [
    //         "nama" => "Camela Desvita Putri",
    //         "nis" => "23389",
    //         "email" => "camelaputri1@gmail.com",
    //         "jurusan" => "RPL"
    //     ],
    //     [
    //         "nama" => "Muhammad Nazril Ilham",
    //         "nis" => "23390",
    //         "email" => "ilhamjepara@gmail.com",
    //         "jurusan" => "OTKP"
    //     ],
    //     [
    //         "nama" => "Muhammad Furkon Hamdalah",
    //         "nis" => "23391",
    //         "email" => "furkon@gmail.com",
    //         "jurusan" => "Listrik"
    //     ]
    // ];

    private $dbh; //database handler
    private $stmt; //statement

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'admin', 'admin123');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllSiswa()
    {
        // return $this->siswa;

        $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}