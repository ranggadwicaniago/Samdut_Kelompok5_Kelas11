<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "nama_database");

//mengambil data dari form
$nama = $_POST['nama'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

//validasi password dan konfirmasi password
if ($password != $konfirmasi_password) {
  echo "Konfirmasi password tidak sesuai";
  exit();
}

//query untuk menyimpan data ke dalam database
$sql = "INSERT INTO tabel_user (nama, password, alamat, jenis_kelamin) VALUES ('$nama', '$password', '$alamat', '$jenis_kelamin')";
if (mysqli_query($conn, $sql)) {
  echo "Registrasi berhasil";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//menutup koneksi ke database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SAMDUT - Sampah di Duitin!</title>
  <link rel="stylesheet" href="register.css">
</head>
<body style="background-color: #9ee060;">
  <div class="container">
    <h1>Buat akun baru</h1>
    <form action="proses_registrasi.php" method="post">
      <label for="nama">Nama Lengkap:</label><br>
      <input type="text" id="nama" name="nama"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br>
      <label for="konfirmasi_password">Konfirmasi Password:</label><br>
      <input type="password" id="konfirmasi_password" name="konfirmasi_password"><br>
      <label for="alamat">Alamat:</label><br>
      <textarea id="alamat" name="alamat"></textarea><br>
      <label for="jenis_kelamin">Jenis Kelamin:</label><br>
      <input type="radio" id="pria" name="jenis_kelamin" value="pria">
      <label for="pria">Pria</label>
      <input type="radio" id="wanita" name="jenis_kelamin" value="wanita">
      <label for="wanita">Wanita</label><br>
      <input type="submit" value="Daftar">
    </form>

    <p align="center">Sudah memiliki akun? <a href="login.html">Masuk</a></p>
  </div>
</body>
</html>
