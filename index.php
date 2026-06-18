<?php
// index.php

// Memuat koneksi dan kelas-kelas yang diperlukan
require_once 'koneksi.php';
require_once 'Pendaftaran.php';
require_once 'PendaftaranReguler.php';
require_once 'PendaftaranPrestasi.php';
require_once 'PendaftaranKedinasan.php';

// Konek ke Database
$database = new Database();
$db = $database->getConnection();

// Mengambil data mentah menggunakan metode query spesifik (Static Method)
$dataReguler   = PendaftaranReguler::getDaftarReguler($db);
$dataPrestasi  = PendaftaranPrestasi::getDaftarPrestasi($db);
$dataKedinasan = PendaftaranKedinasan::getDaftarKedinasan($db);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi PBO - Pendaftaran Mahasiswa Baru</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        h2 { color: #333; margin-top: 40px; border-bottom: 2px solid #ccc; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .info-jalur { font-style: italic; color: #555; }
        .total-biaya { font-weight: bold; color: #d32f2f; }
    </style>
</head>
<body>

    <h1>Daftar Pendaftaran Mahasiswa Baru</h1>
    <p>Sistem Simulasi PBO - Kelompok Data Berdasarkan Jalur Pendaftaran</p>

    <h2>1. Jalur Reguler</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataReguler as $row): 
                // Instansiasi objek secara dinamis untuk memanfaatkan polimorfisme
                $objek = new PendaftaranReguler(
                    $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                    $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                    $row['pilihan_prodi'], $row['lokasi_kampus']
                );
            ?>
                <tr>
                    <td><?= $objek->getIdPendaftaran(); ?></td>
                    <td><?= htmlspecialchars($objek->getNamaCalon()); ?></td>
                    <td><?= htmlspecialchars($objek->getAsalSekolah()); ?></td>
                    <td><?= $objek->getNilaiUjian(); ?></td>
                    <td class="info-jalur"><?= $objek->tampilkanInfoJalur(); ?></td>
                    <td class="total-biaya">Rp <?= number_format($objek->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <h2>2. Jalur Prestasi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataPrestasi as $row): 
                // Instansiasi objek secara dinamis untuk memanfaatkan polimorfisme
                $objek = new PendaftaranPrestasi(
                    $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                    $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                    $row['jenis_prestasi'], $row['tingkat_prestasi']
                );
            ?>
                <tr>
                    <td><?= $objek->getIdPendaftaran(); ?></td>
                    <td><?= htmlspecialchars($objek->getNamaCalon()); ?></td>
                    <td><?= htmlspecialchars($objek->getAsalSekolah()); ?></td>
                    <td><?= $objek->getNilaiUjian(); ?></td>
                    <td class="info-jalur"><?= $objek->tampilkanInfoJalur(); ?></td>
                    <td class="total-biaya">Rp <?= number_format($objek->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <h2>3. Jalur Kedinasan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataKedinasan as $row): 
                // Instansiasi objek secara dinamis untuk memanfaatkan polimorfisme
                $objek = new PendaftaranKedinasan(
                    $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                    $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                    $row['sk_ikatan_dinas'], $row['instansi_sponsor']
                );
            ?>
                <tr>
                    <td><?= $objek->getIdPendaftaran(); ?></td>
                    <td><?= htmlspecialchars($objek->getNamaCalon()); ?></td>
                    <td><?= htmlspecialchars($objek->getAsalSekolah()); ?></td>
                    <td><?= $objek->getNilaiUjian(); ?></td>
                    <td class="info-jalur"><?= $objek->tampilkanInfoJalur(); ?></td>
                    <td class="total-biaya">Rp <?= number_format($objek->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>