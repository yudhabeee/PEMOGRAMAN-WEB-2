<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1 - Kategori Bilangan</title>
</head>
<body>
    <h2>Pengulangan untuk mencari kategori bilangan:</h2>
    <ul>
    <?php
    // Fungsi untuk memeriksa apakah bilangan prima
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Loop untuk bilangan dari 1 hingga 20
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            // Jika bilangan genap
            if (isPrime($i)) {
                echo "<li>Angka $i adalah bilangan genap sekaligus bilangan prima</li>";
            } else {
                echo "<li>Angka $i adalah bilangan genap</li>";
            }
        } else {
            // Jika bilangan ganjil
            if (isPrime($i)) {
                echo "<li>Angka $i adalah bilangan ganjil sekaligus bilangan prima</li>";
            } else {
                echo "<li>Angka $i adalah bilangan ganjil</li>";
            }
        }
    }
    ?>
    </ul>
</body>
</html>