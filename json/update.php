<?php
     $file = "mahasiswa.json";
     $mahasiswa = file_get_contents($file);
     $data = json_decode($mahasiswa, true);

// Membaca data array menggunakan foreach
foreach ($data as $key => $d) {
    // Perbarui data kedua
    if ($d['no'] === 2) {
        $data[$key]['alamat'] = 'Bangli';
    }
}
     $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
     $mahasiswa = file_put_contents($file, $jsonfile);
