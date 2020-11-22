<!DOCTYPE html>
<html>
<head>
	<title>A1-118140173-tugas2</title>
</head>
<body>

	<form action="" method="get">
		
		<label for="nama">Masukan Nama: </label>
		<input type="text" id="nama" name="nama" required>
		<br><br>
		<label for="warna">Masukan warna font: </label>
		<input type="text" id="warna" name="warna" placeholder="Kuning, Ungu, dan Biru">
		<br><br>
		<button type="submit" name="input">Simpan</button>

	</form>

	<br>

	<?php 

		function tampil($nama,$warna){

			$countname=strlen($nama);
			$sum=0;


			if ($countname<=10 && $countname>=1 ) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+300;
				}

				if ($warna=="kuning" || $warna=="Kuning") {
					echo "<font style='color: yellow;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="ungu" || $warna=="Ungu") {
					echo "<font style='color: violet;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="biru" || $warna=="Biru") {
					echo "<font style='color: blue;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="") {
					echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else {
					echo "Maaf, pilihan warna yang tersedia hanya Kuning, Ungu, dan Biru";
				}

			}

			else if ($countname>=11 && $countname<=20 ) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+500;
				}

				if ($warna=="kuning" || $warna=="Kuning") {
					echo "<font style='color: yellow;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="ungu" || $warna=="Ungu") {
					echo "<font style='color: Green;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="biru" || $warna=="Biru") {
					echo "<font style='color: blue;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna==""){
					echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else {
					echo "Maaf, pilihan warna yang tersedia hanya Kuning, Ungu, dan Biru";
				}

			}

			else if ($countname>20) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+700;
				}

				if ($warna=="kuning" || $warna=="Kuning") {
					echo "<font style='color: black;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="ungu" || $warna=="Ungu") {
					echo "<font style='color: violet;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="biru" || $warna=="Biru") {
					echo "<font style='color: blue;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="") {
					echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else {
					echo "Maaf, pilihan warna yang tersedia hanya Kuning, Ungu, dan Biru";
				}

			}
			
		}

		if (isset($_GET["input"])) {
			tampil($_GET["nama"],$_GET["warna"]);
		}

 ?>

</body>
</html>


