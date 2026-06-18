<?php
// PendaftaranPrestasi.php
require_once 'Pendaftaran.php';

class PendaftaranPrestasi extends Pendaftaran {
    // Properti tambahan spesifik
    private $jenisPrestasi;
    private $tingkatPrestasi;

    // Constructor lengkap
    public function __construct($id_pendaftaran = null, $nama_calon = null, $asal_sekolah = null, $nilai_ujian = null, $biayaPendaftaranDasar = null, $jenisPrestasi = null, $tingkatPrestasi = null) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biayaPendaftaranDasar);
        $this->jenisPrestasi = $jenisPrestasi;
        $this->tingkatPrestasi = $tingkatPrestasi;
    }

    // Implementasi metode abstrak dari induk
    public function hitungTotalBiaya() {
        // Misal jalur prestasi mendapatkan potongan biaya pendaftaran sebesar 50.000
        return $this->biayaPendaftaranDasar - 50000;
    }

    public function tampilkanInfoJalur() {
        return "Jalur Pendaftaran: Prestasi | Jenis: " . $this->jenisPrestasi . " | Tingkat: " . $this->tingkatPrestasi;
    }

    // Metode Query Spesifik
    public static function getDaftarPrestasi($db) {
        $query = "SELECT id_pendaftaran, nama_calon, asal_sekolah, nilai_ujian, biaya_pendaftaran_dasar, pilihan_prodi, jenis_prestasi, tingkat_prestasi 
                  FROM tabel_pendaftaran 
                  WHERE jalur_pendaftaran = 'prestasi'";
        
        $stmt = $db->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>