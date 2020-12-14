<?php
include "koneksi.php";

$nim = $_POST["id"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];


$sql = "UPDATE mahasiswa set nama='$nama', prodi='$prodi', angkatan='$angkatan' where nim='$nim'";

$hasil = mysqli_query($kon, $sql);
?>