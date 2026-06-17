<?php
// Pastikan untuk mengimport file abstract class induknya
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan sesuai instruksi
    private $tipeAudio;
    private $lokasiBaris;

    // Constructor untuk menginisialisasi properti induk dan properti sendiri
    public function __construct($idTiket, $harga, $tipeAudio, $lokasiBaris) {
        // Memanggil constructor dari abstract class Tiket (jika ada)
        parent::__construct($idTiket, $harga); 
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
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

    // Implementasi method abstract dari class Tiket (contoh wajib jika ada method abstract)
    public function hitungTotalHarga() {
        return $this->harga; // Modifikasi sesuai logika perhitungan hargamu
    }

    public function hitungTotalHarga($jumlah_kursi) {
    // $this->harga diambil dari properti hargaDasarTiket di kelas induk (Tiket)
    return $jumlah_kursi * $this->harga; 
    }

    public function tampilkanFasilitasUnik() {
    return "Tipe Audio: " . $this->tipeAudio . ", Lokasi Baris: " . $this->lokasiBaris;
    }
}