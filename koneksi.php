<?php
// koneksi/database.php

class Database {
    private $host = "localhost";
    private $username = "root"; // Sesuaikan dengan username MySQL Anda
    private $password = "";     // Sesuaikan dengan password MySQL Anda
    private $db_name = "DB_SIMULASI_PBO_KELAS_FawwazFadhlurRahmanAyyasi";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            // Mengatur mode error PDO ke Exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi database gagal: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>