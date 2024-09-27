<?php
$usia = 30;
$penghasilan = 6000000;
$riwayat_kredit_macet = false;


if ($usia >= 18 && $usia <= 60 && $penghasilan >= 5000000 && !$riwayat_kredit_macet) {
    echo "Pemohon KREDIT LAYAK.";
} else {
    echo "Pemohon KREDIT TIDAK LAYAK.";
}
?>
