<?php

require_once "Mahasiswa.php";
require_once "Database.php";

class MahasiswaMandiri extends Mahasiswa
{
    protected $golongan_ukt;
    protected $nama_wali;

    public function hitungTagihanSemester()
    {
        return $this->tarif_ukt_nominal;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Mahasiswa Mandiri";
    }

    public function ambilDataMandiri()
    {
        $db =
        new Database();

        $query =
        "SELECT * FROM tabel_mahasiswa
        WHERE jenis_pembiayaan='Mandiri'";

        return
        $db
        ->getKoneksi()
        ->query($query);
    }
}

?>