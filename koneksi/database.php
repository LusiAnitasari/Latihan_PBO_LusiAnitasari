<?php
// database.php

$host     = "localhost";
$username = "root";
$password = "";
$database = "nama_database_anda"; // Jalankan penyesuaian nama DB sesuai Tahap 1

// Membuat koneksi menggunakan objek MySQLi (OOP)
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>