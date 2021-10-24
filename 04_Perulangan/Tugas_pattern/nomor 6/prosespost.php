<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 6</title>
</head>
<body>

	<!-- Segitiga sama kaki menghadap ke bawah(agak miring) -->
	
	<?php

		// Deklarasi + Assigment variabel
		$n = $_POST['input_angka'];


		// perulangan bersarang
		for ($i = 0; $i <= $n; $i++) { 

			// For untuk spasi
			for ($j = 0; $j < $i; $j++) { 
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