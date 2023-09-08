<?php
//variabel scope / lingkup variabel
$mahasiswa = [
    [
    "nama" => "Gusti",
    "nrp" => "30032006",
    "email" => "adit94545@gmail",
    "jurusan" => "teknik informatika",
    "gambar" => "foto1.jpg"
    ],
    [
        "nama" => "burhan",
        "nrp" => "90654445",
        "email" => "burhanudin@gmail",
        "jurusan" => "teknik toko",
        "gambar" => "foto2.jfif"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
<img src="img/<?= $mhs["gambar"]; ?>">
</li>
    <li>nama : <?= $mhs["nama"]; ?></li>
    <li>nrp : <?= $mhs["nrp"]; ?></li>
    <li>email : <?= $mhs["email"]; ?></li>
    <li>jurusan : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>
