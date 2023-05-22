<?php
$file = "mahasiswa.json";
$mahasiswa = file_get_contents($file);
$data = json_decode($mahasiswa, true);

// Membaca data array menggunakan foreach
foreach ($data as $key => $d) {
    // Hapus data kedua
    if ($d['no'] === 2) {
        // Menghapus data array sesuai dengan index
        // Menggantinya dengan elemen baru
        array_splice($data, $key, 1);
    }
}
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
$mahasiswa = file_put_contents($file, $jsonfile);
