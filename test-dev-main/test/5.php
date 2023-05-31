<?php

function interpolasi($x1, $y1, $x2, $y2, $x) {
    // Kondisi untuk memastikan input hanya berupa bilangan
    if (!is_numeric($x1) || !is_numeric($y1) || !is_numeric($x2) || !is_numeric($y2) || !is_numeric($x)) {
        return "Input tidak valid. Harap masukkan nilai bilangan.";
    }
    
    // Menghitung nilai y di antara dua titik data menggunakan metode interpolasi linear
    $y = $y1 + (($y2 - $y1) / ($x2 - $x1)) * ($x - $x1);
    
    return $y;
}

// Contoh penggunaan fungsi interpolasi
$x1 = 15;
$y1 = 2.113;
$x2 = 20;
$y2 = 3.225;
$x = 18;

$hasilInterpolasi = interpolasi($x1, $y1, $x2, $y2, $x);

if (is_numeric($hasilInterpolasi)) {
    echo "Nilai interpolasi t18% = " . $hasilInterpolasi;
} else {
    echo $hasilInterpolasi;
}

?>

