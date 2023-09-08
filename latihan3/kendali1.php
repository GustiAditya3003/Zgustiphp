<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memliki tipe data yang berbeda
// pasangan antara key dan value
// keynya adalah index yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januarai", "februari", "maret"];
$array = [123, "tulisan", false];

//menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// menampilkan 1 elemen pada array
// echo $array[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);


?>