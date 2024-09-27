<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrogaman Web Dasar1</title>
</head>
    <h3>Muhammad Rizky</h3>
    <h3>H233600420</h3>
    <h3>IIIA</h3>

<body>

<?php
$gaji_pokok = 5000000;
$tunjangan = 500000 + 300000;
$pajak = 0.10;

$gaji_bersih = ($gaji_pokok + $tunjangan) * (1 - $pajak);

echo "Gaji Bersih: Rp" . number_format($gaji_bersih, 0, ',', '.') . "\n";
?>

    
</body>
</html>