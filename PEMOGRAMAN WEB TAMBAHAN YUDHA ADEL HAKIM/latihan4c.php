<?php
$negara_asean_ibu_kota = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
];

echo "<h3>Daftar Negara ASEAN dan Ibukota :</h3>";
echo "<ul>";
foreach ($negara_asean_ibu_kota as $negara => $ibukota) {
    echo "<li>$negara : $ibukota</li>";
}
echo "</ul>";
?>