<?php
// 1. Import koneksi database dan file kelas
require_once 'koneksi/koneksi.php'; // Sesuaikan dengan nama file koneksimu
require_once 'TiketRegular.php';
require_once 'TiketIMAX.php';
require_once 'TiketVelvet.php';

// 2. Query untuk mengambil data tiket dari database
// (Asumsi nama tabel Anda adalah 'tiket' atau sesuaikan dengan struktur database Tahap 2 Anda)
$query = "SELECT * FROM tiket"; 
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tiket Bioskop - Lusi Anitasari</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        h2 { color: #333; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007BFF; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .badge { padding: 5px 10px; border-radius: 4px; font-size: 12px; font-weight: bold; color: white; }
        .regular { background-color: #28a745; }
        .imax { background-color: #17a2b8; }
        .velvet { background-color: #6f42c1; }
    </style>
</head>
<body>

    <h2>Daftar Tiket Penonton - Manfaat Polimorfisme</h2>

    <table>
        <thead>
            <tr>
                <th>ID Tiket</th>
                <th>Kategori Studio</th>
                <th>Harga Dasar</th>
                <th>Jumlah Kursi</th>
                <th>Spesifikasi Fasilitas Unik (Polimorfik)</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // 3. Looping data dari database menggunakan konsep PBO & Polimorfisme
            while ($row = mysqli_fetch_assoc($result)) {
                $objTiket = null;
                $kategori = strtolower($row['kategori_studio']); // Asumsi nama kolom kategori

                // Instansiasi objek secara dinamis berdasarkan kategori di database
                if ($kategori == 'regular') {
                    $objTiket = new TiketRegular($row['id_tiket'], $row['harga_dasar'], $row['tipe_audio'], $row['lokasi_baris']);
                    $badgeClass = 'regular';
                } elseif ($kategori == 'imax') {
                    $objTiket = new TiketIMAX($row['id_tiket'], $row['harga_dasar'], $row['kacamata_3d_id'], $row['efek_gerak_fitur']);
                    $badgeClass = 'imax';
                } elseif ($kategori == 'velvet') {
                    $objTiket = new TiketVelvet($row['id_tiket'], $row['harga_dasar'], $row['bantal_selimut_pack'], $row['layanan_subtle']);
                    $badgeClass = 'velvet';
                }

                // Jika objek berhasil dibuat, tampilkan ke dalam baris tabel
                if ($objTiket != null) {
                    ?>
                    <tr>
                        <td><?= $row['id_tiket']; ?></td>
                        <td><span class="badge <?= $badgeClass; ?>"><?= strtoupper($kategori); ?></span></td>
                        <td>Rp <?= number_format($row['harga_dasar'], 0, ',', '.'); ?></td>
                        <td><?= $row['jumlah_kursi']; ?></td>
                        <td><em><?= $objTiket->tampilkanFasilitasUnik(); ?></em></td>
                        <td><strong>Rp <?= number_format($objTiket->hitungTotalHarga($row['jumlah_kursi']), 0, ',', '.'); ?></strong></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>

</body>
</html>