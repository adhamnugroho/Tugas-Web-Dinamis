<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 2</title>
</head>
<body>
	
	<!-- Segitiga siku - siku menghadap ke kiri -->

	<?php

		// Deklarasi + Assigment variabel
		$n = $_POST['input_angka'];


		// perulangan
		for ($i = 0; $i <= $n; $i++) {

			// Perulangan untuk spasi
			for ($j = $n; $j > $i; $j--) { 
				echo " &nbsp&nbsp; ";
			}

			// Perulangan untuk bintang
			for ($k = 0; $k < $i; $k++) { 
				echo " * ";
			}

			echo "<br>";
		}

	?>

</body>
</html>