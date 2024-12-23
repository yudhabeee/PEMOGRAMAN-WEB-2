<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3a</title>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <?php
    // Fungsi user-defined untuk mengubah style teks
    function ganti_style($teks, $kelas) {
        return "<p class='$kelas'>$teks</p>";
    }

    // Variabel untuk teks dan kelas
    $tulisan = "Hello World! Here I come!";
    $kelas = "ganti-style";

    // Menampilkan hasil dengan style yang telah diatur
    echo ganti_style($tulisan, $kelas);
    ?>
</body>
</html>