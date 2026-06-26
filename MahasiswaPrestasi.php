<?php

require_once "Mahasiswa.php";
require_once "Database.php";

class MahasiswaPrestasi extends Mahasiswa
{
    protected $nama_instansi_beasiswa;
    protected $minimal_ipk_syarat;

    public function hitungTagihanSemester()
    {
        return 0;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Mahasiswa Prestasi";
    }

    public function ambilDataPrestasi()
    {
        $db =
        new Database();

        $query =
        "SELECT * FROM tabel_mahasiswa
        WHERE jenis_pembiayaan='Prestasi'";

        return
        $db
        ->getKoneksi()
        ->query($query);
    }
}

?>