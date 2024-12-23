<?php
// Membuat array dengan 4 elemen string
$warna = array("hijau", "kuning", "kelabu", "merah muda");

// Menampilkan isi array
echo "Balonku ada lima.<br>";
echo "Rupa-rupa warnanya: ";

// Looping untuk menampilkan isi array
for ($i = 0; $i < count($warna); $i++) {
    echo $warna[$i];
    // Menambahkan koma kecuali pada elemen terakhir
    if ($i < count($warna) - 1) {
        echo ", ";
    }
}

echo ", dan biru.<br>";
echo "Meletus balon hijau, DOR!<br>";
echo "Hatiku sangat kacau.";
?>