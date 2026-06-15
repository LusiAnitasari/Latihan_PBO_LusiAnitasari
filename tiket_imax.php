<?php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    // Properti tambahan sesuai instruksi
    private $kacamata3dId;
    private $efekGerakFitur;

    // Constructor
    public function __construct($idTiket, $harga, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($idTiket, $harga);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    // Getter dan Setter untuk kacamata3dId
    public function getKacamata3dId() {
        return $this->kacamata3dId;
    }

    public function setKacamata3dId($kacamata3dId) {
        $this->kacamata3dId = $kacamata3dId;
    }

    // Getter dan Setter untuk efekGerakFitur
    public function getEfekGerakFitur() {
        return $this->efekGerakFitur;
    }

    public function setEfekGerakFitur($efekGerakFitur) {
        $this->efekGerakFitur = $efekGerakFitur;
    }

    // Implementasi method abstract dari class Tiket
    public function hitungTotalHarga() {
        return $this->harga + 15000; // Contoh: Tambahan biaya studio IMAX
    }
}