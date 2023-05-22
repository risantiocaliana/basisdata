<?php

$data [] = array(
	'no' => 1,
    'NIM'     => 2201010475,
    'NAMA'   => 'RISANTI OCALIANA IVA',
    'alamat' => 'PANJER',
	'NO_TLP' => 081246238250,
	'TGL_LAHIR' => 23-04-2004
);



$data [] = array(
	'no' => 2,
	'NIM'     => '2201010355',
    'NAMA'   => 'MARIA RENITA DIAH',
    'alamat' => 'LABUAN BAJO',
	'NO_TLP' => '081238870242',
	'TGL_LAHIR' => '18-04-2003'
    
);


$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('datamahasiswa.json', $jsonfile);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('datamahasiswa.json', $jsonfile);
?>