<?php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti tambahan sesuai instruksi
    private $bantalSelimutPack;
    private $layananButler;

    // Constructor
    public function __construct($idTiket, $harga, $bantalSelimutPack, $layananButler) {
        parent::__construct($idTiket, $harga);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public static function ambilDataSesuaiId($koneksi, $id) {
    // Query SELECT WHERE untuk mengambil 1 data tiket regular berdasarkan ID
    $query = "SELECT * FROM tiket WHERE id_tiket = '$id' AND kategori_studio = 'regular'";
    $result = mysqli_query($koneksi, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }
    return null;
    }

    // Implementasi method abstract dari class Tiket
    public function hitungTotalHarga() {
        return $this->harga + 25000; // Contoh: Tambahan biaya studio Velvet
    }

    public function hitungTotalHarga($jumlah_kursi) {
    return ($jumlah_kursi * $this->harga) * 1.50;
    }

    public function tampilkanFasilitasUnik() {
    return "Paket Bantal Selimut: " . $this->bantalSelimutPack . ", Layanan Butler: " . $this->layananButler;
    }
}