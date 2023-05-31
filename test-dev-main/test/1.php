<?php

$jsonData = file_get_contents('../assets/json/json1.json');
$data = json_decode($jsonData, true);

$data['nilai-project'] = 'x';
$totalkabupatenProject = 0;


foreach ($data['kabupaten'] as &$kabupaten) {
    $kabupaten['nilai-project'] = 'y';
    $totalKecamatanProject = 0;

    foreach ($kabupaten['kecamatan'] as &$kecamatan) {

        $kecamatan['nilai-project'] = 'z';

        $totalDesaProject = 0;
        foreach ($kecamatan['desa'] as &$desa) {
            // Menghitung nilai-project untuk desa
            // $desa['nilai-project'] = $desa['nilai-project'] + 10; // Contoh operasi pada nilai-project desa
            
            // Menghitung total nilai-project kecamatan dari summary desa
            $totalDesaProject += $desa['nilai-project'];
        }

        // Menyimpan nilai-project kecamatan berdasarkan summary desa
        $kecamatan['nilai-project'] = $totalDesaProject;
        $totalKecamatanProject += $kecamatan['nilai-project'];

    }
    
    $kabupaten['nilai-project'] = $totalKecamatanProject;
    $totalkabupatenProject += $kabupaten['nilai-project'];

}
$data['nilai-project'] = $totalkabupatenProject;

// Menyimpan perubahan pada file JSON
file_put_contents('../assets/json/json1.json', json_encode($data, JSON_PRETTY_PRINT));
$jsonData = file_get_contents('../assets/json/json1.json');
print_r($jsonData);
?>
