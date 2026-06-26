<?php

require_once "Mahasiswa.php";
require_once "Database.php";

class MahasiswaBidikmisi extends Mahasiswa
{
    protected $nomor_kip_kuliah;
    protected $dana_saku_subsidi;

    public function hitungTagihanSemester()
    {
        return 0;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Mahasiswa Bidikmisi";
    }

    public function ambilDataBidikmisi()
    {
        $db =
        new Database();

        $query =
        "SELECT * FROM tabel_mahasiswa
        WHERE jenis_pembiayaan='Bidikasi'";

        return
        $db
        ->getKoneksi()
        ->query($query);
    }
}

?>