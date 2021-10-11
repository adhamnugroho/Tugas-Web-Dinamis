<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 1</title>
</head>
<body>
	
	<!-- PHP -->
	<?php

		// Deklarasi + assigment variabel
		$n = $_POST['input_angka'];


		// Rumus
		$n %= 2;


		// Percabangan
		switch ($n) {
			case '0':
				echo "Ini adalah bilangan genap";
				break;
			
			default:
				echo "Ini adalah bilangan ganjil";
				break;
		}

	?>

</body>
</html>