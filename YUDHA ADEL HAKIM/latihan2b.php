<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 2b</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #3498db;
            float: left;
            margin: 5px;
            text-align: center;
            line-height: 50px;
            color: white;
            font-weight: bold;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    // Variabel untuk jumlah baris
    $jumlahBaris = 5;

    // Looping untuk membuat kotak
    for ($baris = 1; $baris <= $jumlahBaris; $baris++) {
        for ($kolom = 1; $kolom <= $baris; $kolom++) {
            // Menghitung angka yang ditampilkan (1 sampai 5)
            $angka = ($kolom - 1) % 5 + 1;
            // Menampilkan angka di dalam kotak
            echo "<div class='kotak'>" . $angka . "</div>";
        }
        // Clear untuk setiap akhir baris
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>