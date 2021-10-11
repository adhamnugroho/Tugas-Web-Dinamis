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

		// Deklarasi variabel
		$huruf_vocal = $_POST['input_huruf_vocal'];


		// Percabangan
		switch ($huruf_vocal) {
			case 'a':
				echo "Ini termasuk huruf vocal";
				break;

			case 'i':
				echo "Ini termasuk huruf vocal";
				break;

			case 'u':
				echo "Ini termasuk huruf vocal";
				break;

			case 'e':
				echo "Ini termasuk huruf vocal";
				break;

			case 'o':
				echo "Ini termasuk huruf vocal";
				break;			
			
			default:
				echo "Ini bukan termasuk huruf vocal";
				break;
		}

	?>

</body>
</html>