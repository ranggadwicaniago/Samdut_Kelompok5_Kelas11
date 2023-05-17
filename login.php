<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "samdut");

//check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Mengambil data dari form
  $username = $_POST['username'];
  $password = $_POST['pass'];

  // Melakukan query untuk memeriksa kecocokan username dan password
  $query = "SELECT * FROM user WHERE username = '$username' AND pass = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // Login berhasil, arahkan pengguna ke halaman utama atau halaman yang diinginkan
    header("Location: beranda.php");
    exit();
  } else {
    // Login gagal, tampilkan pesan kesalahan
    $error_message = "Username atau password salah. Silakan coba lagi.";
  }
}

// Tutup koneksi ke database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Aplikasi SAMDUT</title>
    <link rel="stylesheet" href="login.css">
    <div class="background"></div>
    <style>
    .background {
        background-image: url("../Samdut_Kelompok5_Kelas11/asset/Nature.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
      }
        </style>
</head>
<body>
    <div class="container">
        <h1>LOGIN SAMDUT<h1>
        <form action="" method="post"> <!-- Perhatikan perubahan pada aksi formulir -->
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username">

            <label for="password">Password</label>
            <input type="password" id="password" name="pass" placeholder="Masukkan password">

            <input type="submit" value="Login">
            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px" align="center">Belum memiliki akun? <a href="register.php">Daftar akun</a></p>
        </form>
        
        <?php if (isset($error_message)): ?>
          <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
