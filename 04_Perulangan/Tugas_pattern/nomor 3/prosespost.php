<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 3</title>
</head>
<body>

	<!-- Segitiga sama kaki menghadap ke atas(agak miring) -->
	
	<?php

		// Deklarasi + Assigmnet Variabel
		$n = $_POST['input_angka'];


		// Pengulangan bersarang
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

	?>

</body>
</html>