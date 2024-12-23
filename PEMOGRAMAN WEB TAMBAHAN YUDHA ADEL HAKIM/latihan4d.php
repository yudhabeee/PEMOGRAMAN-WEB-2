<?php
// Define a multidimensional array with country data
$countries = [
    ["Negara" => "Indonesia", "Ibukota" => "D.K.I. Jakarta", "Kode Telepon" => "+62", "Makanan Khas" => "Nasi Goreng", "Harga" => "20,000"],
    ["Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65", "Makanan Khas" => "Hainanese Chicken Rice", "Harga" => "30,000"],
    ["Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60", "Makanan Khas" => "Nasi Lemak", "Harga" => "25,000"],

];

echo "<table border='1'>
<tr>
    <th>Negara</th>
    <th>Ibukota</th>
    <th>Kode Telepon</th>
    <th>Makanan Khas</th>
    <th>Harga</th>
</tr>";

foreach ($countries as $country) {
    echo "<tr>
        <td>{$country['Negara']}</td>
        <td>{$country['Ibukota']}</td>
        <td>{$country['Kode Telepon']}</td>
        <td>{$country['Makanan Khas']}</td>
        <td>{$country['Harga']}</td>
    </tr>";
}

echo "</table>";
?>