<!DOCTYPE html>
<html>
<head>
	<title>Awal</title>
</head>
<body>
<?php 

require 'functions.php';

$conn = mysqli_connect("localhost","root","","heridhodb") or die("koneksi ke database gagal");

if(isset($_GET['carinama'])){
	$cari = $_GET['carinama'];
	echo "<b>Hasil pencarian : ".$cari."</b><br><br>";

}
?>
 
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Foto</th>
		<th>Nama Jurusan</th>
	</tr>
	<?php 
	if(isset($_GET['carinama'])){
		$cari = $_GET['carinama'];
		$data = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE Nama LIKE '%".$cari."%'");	


	}else{
		$data = mysqli_query($conn,"select * from mahasiswa");
		echo "<h3>Data Mahasiswa</h3>";		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d["NRP"]; ?></td>
		<td><?php echo $d["Nama"]; ?></td>
		<td><?php echo $d["Foto"]; ?></td>
		<td><?php echo $d["Nama Jurusan"]; ?></td>
	</tr>
	<?php } ?>

	</table>
	
	<h4><a href="main.php" style="text-decoration: none;">Kembali ke menu awal</a></h4>

</body>
</html>