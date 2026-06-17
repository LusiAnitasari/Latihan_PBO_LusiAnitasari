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

    public static function ambilDataSesuaiId($koneksi, $id) {
    // Query SELECT WHERE untuk mengambil 1 data tiket IMAX berdasarkan ID
    $query = "SELECT * FROM tiket WHERE id_tiket = '$id' AND kategori_studio = 'imax'";
    $result = mysqli_query($koneksi, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }
    return null;
    }

    public function hitungTotalHarga($jumlah_kursi) {
    return ($jumlah_kursi * $this->harga) + 35000;
    }

    public function tampilkanFasilitasUnik() {
    return "ID Kacamata 3D: " . $this->kacamata3dId . ", Fitur Efek Gerak: " . $this->efekGerakFitur;
    }
}