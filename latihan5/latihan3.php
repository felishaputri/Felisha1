<!DOCTYPE html>
<html>
    <head>
        <title>POST</title>
</head>
<body>
    <?php if ( isset($_POST["submit"]) ) : ?>
        <hi>HELLO, Selamat Datang <?= $_POST["nama"]; ?></hi>
        <?php endif; ?>

        <form action="" method="post">
            Masukkan nama :
            <input type="text" name="nama">
            <br>
            <button type="submit" name="submit">?kirim!</button>
    </form>

    </body>
    </html>