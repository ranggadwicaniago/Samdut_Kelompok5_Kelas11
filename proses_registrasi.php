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
