<?php
$file = "mahasiswa.json";

$mahasiswa = file_get_contents($file);

$data = json_decode($mahasiswa, true);

$data [] = array(
    'no'     => 3,
    'nama'   => 'Komang',
    'alamat' => 'Tabanan'
);
            $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
            $mahasiswa = file_put_contents($file, $jsonfile);