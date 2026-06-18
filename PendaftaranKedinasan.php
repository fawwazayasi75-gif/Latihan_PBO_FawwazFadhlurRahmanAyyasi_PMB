<?php
// PendaftaranKedinasan.php
require_once 'Pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran {
    // Properti tambahan spesifik
    private $skIkatanDinas;
    private $instansiSponsor;

    // Constructor lengkap
    public function __construct($id_pendaftaran = null, $nama_calon = null, $asal_sekolah = null, $nilai_ujian = null, $biayaPendaftaranDasar = null, $skIkatanDinas = null, $instansiSponsor = null) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biayaPendaftaranDasar);
        $this->skIkatanDinas = $skIkatanDinas;
        $this->instansiSponsor = $instansiSponsor;
    }

    // Implementasi metode abstrak dari induk
    public function hitungTotalBiaya() {
        // Misal jalur kedinasan dikenakan biaya tambahan diklat sebesar 100.000
        return $this->biayaPendaftaranDasar + 100000;
    }

    public function tampilkanInfoJalur() {
        return "Jalur Pendaftaran: Kedinasan | SK: " . $this->skIkatanDinas . " | Sponsor: " . $this->instansiSponsor;
    }

    // Metode Query Spesifik
    public static function getDaftarKedinasan($db) {
        $query = "SELECT id_pendaftaran, nama_calon, asal_sekolah, nilai_ujian, biaya_pendaftaran_dasar, sk_ikatan_dinas, instansi_sponsor 
                  FROM tabel_pendaftaran 
                  WHERE jalur_pendaftaran = 'kedinasan'";
        
        $stmt = $db->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>