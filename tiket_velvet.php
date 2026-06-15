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

    // Getter dan Setter untuk bantalSelimutPack
    public function getBantalSelimutPack() {
        return $this->bantalSelimutPack;
    }

    public function setBantalSelimutPack($bantalSelimutPack) {
        $this->bantalSelimutPack = $bantalSelimutPack;
    }

    // Getter dan Setter untuk layananButler
    public function getLayananButler() {
        return $this->layananButler;
    }

    public function setLayananButler($layananButler) {
        $this->layananButler = $layananButler;
    }

    // Implementasi method abstract dari class Tiket
    public function hitungTotalHarga() {
        return $this->harga + 25000; // Contoh: Tambahan biaya studio Velvet
    }
}