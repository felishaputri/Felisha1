<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "roor", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array asosiatif
// mysqli_fetch_object()

// while( $mhs = mysqli_fetch_assoc($result)) {
    // var_dump($mhs);
// }




?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa<h1>

<table border="1" cellpadding="3" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aktif</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
</tr>

<?php $i = 1; ?>
<php foreach( $mahasiswa as $row ) ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
</td>
<td><img src="img/<?php echo $row["gambar"]; ?> "width="80"></td>
<td><?=$row["nrp"]; ?></td>
<td><?=$row["nama"]; ?></td>
<td><?=$row["email"]; ?></td>
<td><?=$row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>
</table>

</body>
</html>