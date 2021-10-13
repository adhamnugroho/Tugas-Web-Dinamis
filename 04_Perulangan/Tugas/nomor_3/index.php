<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 3</title>
</head>
<body>
	
	<!-- PHP -->
	<?php

		// Deklarasi + Assigment variabel
		$angka = 5;


		$angka *= 2;


		// Pengulangan Bersarang
		for ($i = 1; $i <= $angka; $i++) { 
			for ($j = 1; $j <= $i; $j++) { 
				echo "$j ";
			}

			echo "<br>";
		}

	?>

</body>
</html>