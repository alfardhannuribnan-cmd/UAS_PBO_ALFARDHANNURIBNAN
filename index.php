<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

require_once("Database.php");

$db =
new Database();

$koneksi =
$db->getKoneksi();

?>

<!DOCTYPE html>

<html>

<head>

<title>
Registrasi Pembayaran Kuliah
</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
display:flex;
background:#f3f5fa;
}

.sidebar{

width:260px;

height:100vh;

background:#183b6b;

color:white;

padding:30px;

position:fixed;

}

.sidebar h2{

margin-bottom:40px;

}

.sidebar a{

display:block;

color:white;

text-decoration:none;

padding:15px;

margin-bottom:10px;

border-radius:10px;

}

.sidebar a:hover{

background:#2d5da8;

}

.content{

margin-left:280px;

padding:30px;

width:100%;

}

.card{

background:white;

padding:25px;

border-radius:12px;

margin-bottom:35px;

box-shadow:
0 3px 10px rgba(0,0,0,.1);

}

table{

width:100%;

border-collapse:collapse;

}

th{

background:#0d6efd;

color:white;

}

td,th{

padding:12px;

border:1px solid #ddd;

}

.tagihan{

font-weight:bold;

color:#0d6efd;

}

</style>

</head>

<body>

<div class="sidebar">

<h2>
🎓 Sistem UKT
</h2>

<a href="#mandiri">
Mahasiswa Mandiri
</a>

<a href="#bidik">
Mahasiswa Bidikmisi
</a>

<a href="#prestasi">
Mahasiswa Prestasi
</a>

</div>

<div class="content">

<h1>
Daftar Registrasi Pembayaran Kuliah
</h1>

<?php

$kategori=[
"Mandiri",
"Bidikasi",
"Prestasi"
];

foreach($kategori as $jenis){

$id=
strtolower(
$jenis
);

?>

<div
class="card"

id="<?= $id ?>"

>

<h2>

Kategori :

<?= $jenis ?>

</h2>

<br>

<table>

<tr>

<th>ID</th>
<th>Nama</th>
<th>NIM</th>
<th>Semester</th>
<th>Total Tagihan</th>
<th>Data Akademik</th>

</tr>

<?php

$query=
"
SELECT *
FROM tabel_mahasiswa
WHERE jenis_pembiayaan='$jenis'
";

$data=
$koneksi
->query($query);

while(
$row=
$data->fetch_assoc()
){

if(
$jenis=="Mandiri"
){

$tagihan=
$row["tarif_ukt_nominal"]
+
100000;

$info=
"
Golongan :
".$row["golongan_ukt"].

"<br>Wali :
".$row["nama_wali"];

}

elseif(
$jenis=="Bidikasi"
){

$tagihan=0;

$info=
"
KIP :
".$row["nomor_kip_kuliah"].

"<br>Subsidi :
Rp ".

number_format(
$row["dana_saku_subsidi"]
);

}

else{

$tagihan=
$row["tarif_ukt_nominal"]
*
0.25;

$info=
"
Instansi :
".$row["nama_instansi_beasiswa"].

"<br>IPK :
".$row["minimal_ipk_syarat"];

}

?>

<tr>

<td>
<?= $row["id_mahasiswa"] ?>
</td>

<td>
<?= $row["nama_mahasiswa"] ?>
</td>

<td>
<?= $row["nim"] ?>
</td>

<td>
<?= $row["semester"] ?>
</td>

<td class="tagihan">

Rp

<?= number_format($tagihan) ?>

</td>

<td>

<?= $info ?>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php } ?>

</div>

</body>

</html>