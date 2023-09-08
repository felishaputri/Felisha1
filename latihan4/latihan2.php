<?php
// $mahasiswa = {
//    ["Felisha Putri", "081257888737", "Rekayasa Perangkat Lunak", "felishaputri0703@gmail.com"]
// };

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri 
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

    <title>Daftar Mahasiswa</title>
    </head>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" width="250px">
    </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>Nrp : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["email"]; ?></li>
        <li>Email : <?= $mhs["jurusan"]; ?></li>

    </ul>
    <?php endforeach; ?>
    </body>
    </html>
