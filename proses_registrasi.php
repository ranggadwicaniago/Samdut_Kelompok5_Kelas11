<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menambahkan data ke dalam tabel
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $password = $_POST["password"];
  $konfirmasi_password = $_POST["konfirmasi_password"];
  $alamat = $_POST["alamat"];
  $jenis_kelamin = $_POST["jenis_kelamin"];

  $sql = "INSERT INTO tabel_pengguna (nama, password, konfirmasi_password, alamat, jenis_kelamin)
  VALUES ('$nama', '$password', '$konfirmasi_password', '$alamat', '$jenis_kelamin')";

  if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
  } else {
    echo "Terjadi kesalahan: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Menutup koneksi
mysqli_close($conn);
?>
