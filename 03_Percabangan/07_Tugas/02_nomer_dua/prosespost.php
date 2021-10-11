<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soal Nomor 2</title>
</head>
<body>
	
	<!-- PHP -->
	<?php

		// deklarasi variabel
		$nilai = $_POST['input_nilai'];


		// Percabangan
		if ($nilai >= 75 && $nilai <= 100) {
			echo "Selamat anda telah lulus!";
		} else {
			echo "Maaf anda belum lulus";
		}

	?>

</body>
</html>