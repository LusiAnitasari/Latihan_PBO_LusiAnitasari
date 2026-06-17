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

    // Getter dan Setter untuk tipeAudio
    public function getTipeAudio() {
        return $this->tipeAudio;
    }

    public function setTipeAudio($tipeAudio) {
        $this->tipeAudio = $tipeAudio;
    }

    // Getter dan Setter untuk lokasiBaris
    public function getLokasiBaris() {
        return $this->lokasiBaris;
    }

    public function setLokasiBaris($lokasiBaris) {
        $this->lokasiBaris = $lokasiBaris;
    }

    // Implementasi method abstract dari class Tiket (contoh wajib jika ada method abstract)
    public function hitungTotalHarga() {
        return $this->harga; // Modifikasi sesuai logika perhitungan hargamu
    }

    public function hitungTotalHarga($jumlah_kursi) {
    // $this->harga diambil dari properti hargaDasarTiket di kelas induk (Tiket)
    return $jumlah_kursi * $this->harga; 
    }
}