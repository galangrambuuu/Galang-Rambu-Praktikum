<html>
<head>
<title>Praktikum Tanggal</title>
</head>
<body>
<?php
$namahari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
$namabulan = array(
    "",
    "Januari","Pebruari","Maret","April","Mei","Juni",
    "Juli","Agustus","September","Oktober","November","Desember"
);

echo $namahari[date("w")] . ", " . date("j") . " " . $namabulan[date("n")] . " " . date("Y");

echo "<br />";
echo date("Y/m/d") . "<br />";       // format 2017/10/02
echo date("l, d-m-Y") . "<br />";    // Tuesday, 02-10-2017
echo date("d F Y") . "<br />";       // 02 Oktober 2017

echo date("h:i:s") . "<br />";       // 00:31:04
echo date("l, d-m-Y h:i:s") . "<br />"; // Tuesday, 02-10-2017 00:31:35
?>
</body>
</html>
