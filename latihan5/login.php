<?php
// cek apakah tombol submit sudah tekan atau belum
  if( isset($_POST["submit"])){
// cek usename & password 
  if( $_POST["username"] == "admin" && $_POST["password"]== "123"){
// jika benar, redirect ke halaman admin
   header("Location: admin.php");
   exit;
  } else{
// jika salah, tampilan pesan kesalahan 
$error = true;
  }
}
  ?>
  
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if( isset($error)) : ?>
        <p style="color: red; font-style: italic;">usename / password salah!</p>
        <?php endif;?>

        <form action=""method="post"></form>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="passwod">password :</label>
        <input typo="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
    </form>
    </body>
    </html>