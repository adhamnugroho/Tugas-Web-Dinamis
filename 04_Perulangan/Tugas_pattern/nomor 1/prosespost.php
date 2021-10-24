<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 1</title>
</head>
<body>

	<!-- Segitiga siku - siku mengahadap ke kanan -->
	
	<?php

		// Deklarasi + Assigment variabel
		$n = $_POST['input_angka'];


		// Perulangan
		for ($i = 0; $i <= $n; $i++) {

			 // Pengulangan untuk bintang
			for ($j = 0; $j < $i; $j++) { 
				echo "* ";
			}

			echo "<br>";
		}

	?>

</body>
</html>