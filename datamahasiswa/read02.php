<?php

$file = "datamahasiswa.json";

$datamahasiswa = file_get_contents($file);

$data = json_decode($datamahasiswa, true);

foreach ($data as $d) {
    echo $d['NIM']. "<br>";
    echo $d['NAMA']. "<br>";
    echo $d['alamat']. "<br>";
	echo $d['NO_TLP']. "<br>";
	echo $d['TGL_LAHIR']. "<br>";
}
?>