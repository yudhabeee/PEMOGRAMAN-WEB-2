<?php
// Membuat array dengan 4 elemen string
$warna = array("hijau", "kuning", "kelabu", "merah muda");

// Menampilkan isi array dalam kalimat
echo "Balonku ada lima.<br>";
echo "Rupa-rupa warnanya: ";

// Menggunakan loop untuk menampilkan semua elemen array
for ($i = 0; $i < count($warna); $i++) {
    echo $warna[$i];
    // Menambahkan koma kecuali pada elemen terakhir
    if ($i < count($warna) - 1) {
        echo ", ";
    }
}

// Menambahkan teks akhir sesuai instruksi
echo ", dan biru.<br>";
echo "Meletus balon " . $warna[0] . " DOR!!!<br>"; // Menggunakan elemen pertama dari array
echo "Hatiku sangat kacau.";
?>