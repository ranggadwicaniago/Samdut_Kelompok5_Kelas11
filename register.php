<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SAMDUT - Sampah di Duitin!</title>
  <link rel="stylesheet" href="register.css">
  <style>
    .error-message {
      color: red;
      display: none;
      margin-top: 5px;
    }
  </style>
</head>
<body style="background-color: #9ee060;">
  <div class="container">
    <h1>Buat akun baru</h1>
    <form method="post">
      <label for="username">Nama Lengkap:</label><br>
      <input type="text" id="username" name="username"><br>
      <span class="error-message" id="username-error">Username tidak boleh kosong</span><br>

      <label for="password">Password:</label><br>
      <input type="password" id="pass" name="pass"><br>

      <label for="konfirmasi_password">Konfirmasi Password:</label><br>
      <input type="password" id="konfirmasi_password" name="konfirmasi_password"><br>
      <span class="error-message" id="password-error">Password tidak sesuai</span><br>

      <label for="alamat">Alamat:</label><br>
      <textarea id="alamat" name="alamat"></textarea><br>

      <label for="jenis_kelamin">Jenis Kelamin:</label><br>
      <input type="radio" id="pria" name="jenis_kelamin" value="pria">
      <label for="pria">Pria</label>
      <input type="radio" id="wanita" name="jenis_kelamin" value="wanita">
      <label for="wanita">Wanita</label><br>

      <input type="submit" value="Daftar">
    </form>

    <p align="center">Sudah memiliki akun? <a href="login.php">Masuk</a></p>
  </div>
</body>
</html>

<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "samdut");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//mengambil data dari form
$username = $_POST['username'];
$pass = $_POST['pass'];
$konfirmasi_password = $_POST['konfirmasi_password'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

//validasi username tidak boleh kosong
if (empty($username)) {
  echo '<script>document.getElementById("username-error").style.display = "block";</script>';
  exit();
}

//validasi password dan konfirmasi password
if ($pass != $konfirmasi_password) {
  echo '<script>document.getElementById("password-error").style.display = "block";</script>';
  exit();
}

//validasi minimal password 8 karakter
if (strlen($pass) < 8) {
  echo "Password minimal 8 karakter";
  exit();
}

// Prepare and bind the query
$stmt = $conn->prepare("INSERT INTO user (username, pass, konfirmasi_password, alamat, jenis_kelamin) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $username, $pass, $konfirmasi_password, $alamat, $jenis_kelamin);

// Execute the query
if ($stmt->execute()) {
  header("Location: register_berhasil.php"); // Redirect to the success page
  exit();
} 
  else {
echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
