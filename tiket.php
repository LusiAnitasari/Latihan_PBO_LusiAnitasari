<?php
// Tiket.php

abstract class Tiket {
    // Properti/Atribut Terenkapsulasi (protected)
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $hargaDasarTiket;

    // Constructor untuk menetapkan nilai properti dari kolom tabel database
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket) {
        $this->id_tiket        = $id_tiket;
        $this->nama_film       = $nama_film;
        $this->jadwal_tayang   = $jadwal_tayang;
        $this->jumlah_kursi    = $jumlah_kursi;
        $this->hargaDasarTiket = $hargaDasarTiket;
    }

    // Metode Abstrak (Tanpa Isi/Body) - Wajib diimplementasikan di class turunan nantinya
    abstract public function hitungTotalHarga();
    abstract public function tampilkanInfoFasilitas();
}
?>