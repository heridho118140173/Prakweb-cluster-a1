<!DOCTYPE html>
<html>
<head>
	<title>A1-118140173-tugas1</title>
</head>
<body>

	<form action="" method="get">
		
		<label for="input">Masukan bilangan: </label>
		<input type="number" id="input" name="bilangan">
		<br><br>
		<button type="submit" name="submit">Simpan</button>

	</form>
	<br>

</body>
</html>

<?php 

	function faktorial($n){

		$fakto=1;
		echo "$n! = ";

		for ($i=$n;$i>0;$i--){

			if ($i==1) {
				echo "$i";
			}

			else {
				echo "$i * ";
			}
			
			$fakto=$fakto*$i;

		}

		echo " = $fakto";
	}

	if (isset($_GET["submit"])) {
		faktorial($_GET["bilangan"]);
	}

 ?>
