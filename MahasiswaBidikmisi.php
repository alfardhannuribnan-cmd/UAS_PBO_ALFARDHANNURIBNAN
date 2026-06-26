<?php

require_once "Mahasiswa.php";

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
        return "Pembiayaan Bidikmisi";
    }

    public function ambilDataBidikmisi($koneksi)
    {
        $query =
        "SELECT *
        FROM tabel_mahasiswa
        WHERE jenis_pembiayaan='Bidikasi'";

        return
        $koneksi->query($query);
    }
}

?>