<!DOCTYPE html>
<html>
<head>
    <title>LATIHAN 8 PEMROGRAMAN WEB</title>
</head>
<body>
<?php
// Cara pertama mendeklarasikan array 1 dimensi
print("CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI:<br/>");
$kota[0] = "Yogyakarta";
$kota[1] = "Jakarta";
$kota[2] = "Malang";
print("Kota pilihanku: " . $kota[2]);

echo "<br/><br/>";

// Cara kedua mendeklarasikan array 1 dimensi
print("CARA KEDUA MENDEKLARASIKAN ARRAY 1 DIMENSI:<br/>");
$kota2 = array(0 => "Medan", 1 => "Bandung", 2 => "Surabaya");
print("Kota pilihanku: " . $kota2[0]);

echo "<br/><br/>";

// Cara ketiga mendeklarasikan array dengan index teks
print("CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI:<br/>");
$inisialkota = array(
    "JBR" => "Jember",
    "SDA" => "Sidoarjo",
    "SBY" => "Surabaya"
);
echo "Inisial JBR adalah kota: " . $inisialkota["JBR"];
?>
</body>
</html>
