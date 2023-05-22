<?php
$file = "datamahasiswa.json";

$datamahasiswa = file_get_contents($file);

$data = json_decode($datamahasiswa, true);

$data [] = array(
    'no' => 2,
	'NIM'     => 2201010509,
    'NAMA'   => 'yosephina karolin manul',
    'alamat' => 'LABUAN BAJO',
	'NO_TLP' => '081238870242',
	'TGL_LAHIR' => '23-08-2004'
);
            $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
            $datamahasiswa = file_put_contents($file, $jsonfile);