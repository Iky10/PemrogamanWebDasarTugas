<?php
$harga = 200000; 
$jumlah = 150; 

$total_penjualan = $harga * $jumlah;
$pemilik = $total_penjualan * 0.7;
$toko = $total_penjualan * 0.3;

echo "Pemilik : Rp " . number_format($pemilik, 0, ',', '.') . "<br>";
echo "Pihak Toko : Rp " . number_format($toko, 0, ',', '.') . "<br>";
?>
