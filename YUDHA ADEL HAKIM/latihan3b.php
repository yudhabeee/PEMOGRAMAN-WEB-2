<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3b</title>
</head>
<body>
    <?php
    // Deklarasi variabel
    $variabel1 = "Halo"; // Variabel dengan nilai string
    $variabel2 = "";     // Variabel dengan nilai string kosong
    $variabel3 = null;   // Variabel dengan nilai null

    // Menggunakan isset()
    echo "<h3>Contoh isset()</h3>";
    echo "Variabel1 (Halo) isset? : " . (isset($variabel1) ? 'true' : 'false') . "<br>";
    echo "Variabel2 ('') isset? : " . (isset($variabel2) ? 'true' : 'false') . "<br>";
    echo "Variabel3 (null) isset? : " . (isset($variabel3) ? 'true' : 'false') . "<br>";

    // Menggunakan empty()
    echo "<h3>Contoh empty()</h3>";
    echo "Variabel1 (Halo) empty? : " . (empty($variabel1) ? 'true' : 'false') . "<br>";
    echo "Variabel2 ('') empty? : " . (empty($variabel2) ? 'true' : 'false') . "<br>";
    echo "Variabel3 (null) empty? : " . (empty($variabel3) ? 'true' : 'false') . "<br>";
    ?>
</body>
</html>