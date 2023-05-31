<?php

$jsonData = file_get_contents('../assets/json/json1.json');
$data = json_decode($jsonData, true);

$desaNames = [];
foreach ($data['kabupaten'] as $kabupaten) {
    foreach ($kabupaten['kecamatan'] as $kecamatan) {
        foreach ($kecamatan['desa'] as $desa) {
            if ($desa['nilai-project'] > 300) {
                $desaNames[] = $desa['nama'];
            }
        }
    }
}

// Menampilkan nama desa yang nilai projectnya lebih dari 300
foreach ($desaNames as $desaName) {
    echo $desaName . '<br>';
}

?>
