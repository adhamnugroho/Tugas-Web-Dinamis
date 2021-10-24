<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 5</title>
</head>
<body>

	<!-- Segiiga siku - siku menghadap ke kiri, flip ke bawah -->
	
	<?php

		// Deklarasi + Assigment variabel
		$n = $_POST['input_angka'];


		// Perulangan bersarang
		for ($i = 0; $i <= $n; $i++) { 
			
			// Perulangan untuk spasi
			for ($j = 0; $j < $i; $j++) { 
				echo " &nbsp;&nbsp; ";
			}


			// perulangan untuk segitiga
			for ($k = $n; $k > $i; $k--) { 
				echo " * ";
			}

			echo "<br>";
		}

	?>

</body>
</html>