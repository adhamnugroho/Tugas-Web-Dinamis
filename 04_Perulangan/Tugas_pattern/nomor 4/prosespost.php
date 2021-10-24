<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Nomor 4</title>
</head>
<body>

    <!-- Segitiga siku - siku menghadap ke kanan, flip ke bawah -->

    <?php 
        
        // Deklarasi variabel + Assigment
        $n = $_POST['input_angka'];


        // Perulangan
        for($i = 0; $i <= $n ; $i++) {
            
            // Perulangan untuk bintang
            for($j = $n; $j > $i; $j--) {

                echo " *";
            }

            echo "<br>";
        }

    ?>
    
</body>
</html>