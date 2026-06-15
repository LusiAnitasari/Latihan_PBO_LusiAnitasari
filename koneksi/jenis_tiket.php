<?php
// JenisTiket.php
require_once 'Tiket.php';

// 1. Subclass TiketRegular
class TiketRegular extends Tiket {
    // Properti tambahan khusus kelas Regular
    private $tipeAudio;
    private $lokasiBaris;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $tipeAudio, $lokasiBaris) {
        // Memanggil constructor dari parent class (Tiket)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    public function hitungTotalHarga() {
        // Implementasi dasar (akan di-override detailnya di Tahap 5 jika ada aturan khusus)
        return $this->hargaDasarTiket * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas Regular: Audio " . $this->tipeAudio . ", Baris Kursi " . $this->lokasiBaris;
    }
}

// 2. Subclass TiketIMAX
class TiketIMAX extends Tiket {
    // Properti tambahan khusus kelas IMAX
    private $kacamata3dId;
    private $efekGerakFitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    public function hitungTotalHarga() {
        return $this->hargaDasarTiket * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas IMAX: Kacamata 3D ID " . $this->kacamata3dId . ", Fitur Efek Gerak: " . ($this->efekGerakFitur ? 'Aktif' : 'Tidak Aktif');
    }
}

// 3. Subclass TiketVelvet
class TiketVelvet extends Tiket {
    // Properti tambahan khusus kelas Velvet
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public function hitungTotalHarga() {
        return $this->hargaDasarTiket * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas Velvet: Paket Bantal & Selimut " . $this->bantalSelimutPack . ", Layanan Butler: " . ($this->layananButler ? 'Tersedia' : 'Tidak Tersedia');
    }
}
?>