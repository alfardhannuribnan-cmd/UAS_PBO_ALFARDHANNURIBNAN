<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

require_once "Database.php";

$db =
new Database();

$koneksi =
$db->getKoneksi();

if(!$koneksi){
die("Koneksi gagal");
}

?>

<!DOCTYPE html>

<html>

<head>

<title>
Registrasi Pembayaran Kuliah
</title>

<style>

body{
font-family:Arial;
padding:30px;
background:#f5f5f5;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

th,td{
padding:10px;
border:1px solid black;
}

th{
background:#0d6efd;
color:white;
}

h2{
margin-top:40px;
}

</style>

</head>

<body>

<h1>
Registrasi Pembayaran Mahasiswa
</h1>

<?php

$jenisArray=
[
"Mandiri",
"Bidikasi",
"Prestasi"
];

foreach($jenisArray as $jenis){

echo "<h2>$jenis</h2>";

$sql=
"SELECT *
FROM tabel_mahasiswa
WHERE jenis_pembiayaan='$jenis'";

$data=
$koneksi
->query($sql);

if(!$data){

echo
"KESALAHAN QUERY : "
.
$koneksi
->error;

continue;

}

if(
$data->num_rows==0
){

echo
"Tidak ada data";

continue;

}

?>

<table>

<tr>

<th>ID</th>
<th>Nama</th>
<th>NIM</th>
<th>Semester</th>
<th>Tagihan</th>
<th>Spesifikasi</th>

</tr>

<?php

while(
$row=
$data
->fetch_assoc()
){

if(
$jenis=="Mandiri"
){

$tagihan=
$row["tarif_ukt_nominal"]
+
100000;

$spesifikasi=
"UKT :
"
.
$row["golongan_ukt"]
.
"<br>Wali :
"
.
$row["nama_wali"];

}

elseif(
$jenis=="Bidikasi"
){

$tagihan=0;

$spesifikasi=
"KIP :
"
.
$row["nomor_kip_kuliah"]
.
"<br>Subsidi :
Rp "
.
number_format(
$row["dana_saku_subsidi"]
);

}

else{

$tagihan=
$row["tarif_ukt_nominal"]
*
0.25;

$spesifikasi=
$row["nama_instansi_beasiswa"]
.
"<br>IPK :
"
.
$row["minimal_ipk_syarat"];

}

?>

<tr>

<td><?= $row["id_mahasiswa"] ?></td>

<td><?= $row["nama_mahasiswa"] ?></td>

<td><?= $row["nim"] ?></td>

<td><?= $row["semester"] ?></td>

<td>
Rp
<?= number_format($tagihan) ?>
</td>

<td>
<?= $spesifikasi ?>
</td>

</tr>

<?php } ?>

</table>

<?php } ?>

</body>

</html>