<?php

$jsonData = file_get_contents('../assets/json/json1.json');
$data = json_decode($jsonData, true);

$totalProjectKab2 = 0;
foreach ($data['kabupaten'] as $kabupaten) {
    if ($kabupaten['nama'] === 'kab2') {
        foreach ($kabupaten['kecamatan'] as $kecamatan) {
            foreach ($kecamatan['desa'] as $desa) {
                $totalProjectKab2 += $desa['nilai-project'];
            }
        }
    }
}

// Menampilkan total nilai project di kabupaten kab2
echo 'Total nilai project di kabupaten kab2: ' . $totalProjectKab2;
?>
