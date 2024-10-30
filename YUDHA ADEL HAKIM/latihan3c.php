<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3c</title>
</head>
<body>
    <?php
    // Mendefinisikan fungsi untuk menghitung pangkat
    function pangkat($angka, $pangkat) {
        return pow($angka, $pangkat);
    }

    // Menggunakan fungsi pangkat
    $angka = 5;
    $pangkat = 4;
    $hasil = pangkat($angka, $pangkat);

    // Menampilkan hasilnya
    echo "$angka pangkat $pangkat = $hasil";
    ?>
</body>
</html>