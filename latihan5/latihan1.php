<?php
// $_GET

$mahasiswa = [
    [
      "nama" => "Felisha Putri",
      "nrp"  => "081257888737",
      "email" => "felishaputri0703@gmail.com",
      "jurusan" => "Rekayasa Perangkat Lunak",
      "gambar" => "pwpb4.jpg" 
    ]
]

?>
<!DOCTYPE html>
<html>
    <head>
        <title>GET</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach( $mahasiswa as $mhs ) : ?>
                <li>
                    <a href="latihan2.php?nama=<?= $mhs ["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
                    &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?> </a>
            </li>
            <?php endforeach; ?>
            </ul>
            </body>
            </html>