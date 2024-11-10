<?php
// Membuat variabel JSON
$jsonData = '{"nama": "Gilang Prasetyo Aji", "umur": 25, "pekerjaan": "CNC Milling Operator"}';

// Decode JSON menjadi PHP Object
$obj = json_decode($jsonData);

// Akses nilai dalam PHP Object
echo "Nama (dari Object): " . $obj->nama . "\n";
echo "Umur (dari Object): " . $obj->umur . "\n";
echo "Pekerjaan (dari Object): " . $obj->pekerjaan . "\n";

// Decode JSON menjadi PHP Array
$arr = json_decode($jsonData, true);

// Akses nilai dalam PHP Array
echo "Nama (dari Array): " . $arr['nama'] . "\n";
echo "Umur (dari Array): " . $arr['umur'] . "\n";
echo "Pekerjaan (dari Array): " . $arr['pekerjaan'] . "\n";
?>