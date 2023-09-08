<?php
// variabel scope / lingkup variabel
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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="kendali2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>$gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>