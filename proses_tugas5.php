<?php

if (isset($_POST['submit'])) {

    $kartu = $_POST['kartu'];
    $total = $_POST['total'];
    $diskon = 0;

    // Jika punya kartu member
    if ($kartu == "ya") {

        if ($total > 500000) {
            $diskon = 50000;
        } 
        elseif ($total > 100000) {
            $diskon = 15000;
        } 
        else {
            $diskon = 0;
        }

    } 
    // Jika tidak punya kartu
    else {

        if ($total > 100000) {
            $diskon = 5000;
        } 
        else {
            $diskon = 0;
        }
    }

    $totalBayar = $total - $diskon;

    echo "<h2>Hasil Perhitungan</h2>";
    echo "Apakah ada kartu member: $kartu <br>";
    echo "Total belanja: Rp " . number_format($total,0,",",".") . "<br>";
    echo "Diskon: Rp " . number_format($diskon,0,",",".") . "<br>";
    echo "<b>Total Bayar: Rp " . number_format($totalBayar,0,",",".") . "</b><br><br>";

    echo "<a href='form_member.php'>Hitung Lagi</a>";
}

?>