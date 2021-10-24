<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 7</title>
</head>
<body>

	<!-- belah ketupat(agak miring) -->
	
	<?php

		// Deklarasi + Assigment variabel
		$n = $_POST['input_angka'];


		// Perulangan bersarang
		
		// Segitiga atas
		for ($i = 0; $i <= $n; $i++) { 
			
			// Perulangan untuk spasi
			for ($j = $n; $j > $i; $j--) { 
				echo " &nbsp; ";
			}

			//perulangan untuk bintang
			for ($k = 0; $k < $i; $k++) { 
				echo " * ";
			}

			echo "<br>";
		}

		
		// segitiga bawah
		for ($i = 0; $i <= $n; $i++) { 

			// For untuk spasi
			for ($j = 1; $j <= $i; $j++) { 
				echo " &nbsp; ";
			}


			// for untuk perulangan bintang
			for ($k = $n; $k > $i ; $k--) { 
				echo " * ";
			}

			echo "<br>";
		}

	?>

</body>
</html>