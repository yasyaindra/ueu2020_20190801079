<?php 
require 'functions.php';

$id = $_GET['id'];
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $mahasiswa['gambar']; ?>"></li>
        <li>Nama : <?= $mahasiswa['nama']; ?></li>
        <li>NRP : <?= $mahasiswa['nrp']; ?></li>
        <li>Email : <?= $mahasiswa['email']; ?></li>
        <li>Jurusan : <?= $mahasiswa['jurusan']; ?></li>
        <li><a href="">Ubah</a> | <a href="">Hapus</a> </li>
        <li><a href="latihan3.php">Kembali</a></li>
    </ul>
</body>
</html>