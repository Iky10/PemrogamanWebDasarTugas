<?php
$tabungan = 10000000;
$harga_laptop = 7000000;
$harga_smartphone = 3500000 * 0.10; // Diskonnya 10%

$sisa_tabungan = $tabungan - ($harga_laptop + $harga_smartphone);

echo "Sisa tabungan Fajar: Rp." . number_format($sisa_tabungan, 0, ',', '.');
?>
