<?php
$mahasiswa = [
    [" gusti aditya", "3003006", "rpl", "adit94545@gmail.com"],
    [" irma diana", "1912005", "rpl1", "irmadiana@gmail.com"],
    [" arya anggara", "7357396", "rpl2", "aryaanggara@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>daftar mahasiswa</h1>

<!-- <ul>
    <li>gusti aditya</li>
    <li>3003006</li>
    <li>rpl</li>
    <li>adit94545@gmail.com</li>
</ul> -->

<!-- <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
    <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul> -->
<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>nama : <?= $mhs[0] ?></li>
    <li>nrp : <?= $mhs[1] ?></li>
    <li>jurusan : <?= $mhs[2] ?></li>
    <li>email : <?= $mhs[3] ?></li>

</ul>
<?php endforeach; ?>




</body>
</html>