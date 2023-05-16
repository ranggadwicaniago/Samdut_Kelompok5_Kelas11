<?php
$host = 'localhost';
$dbname = 'samdut';
$usernm = 'root';
$pass = '';

$mysqli = mysqli_connect($host, $dbname, $usernm, $pass);

if($mysqli){
    die("Koneksi gagal" . mysqli_connect_error());

}
echo"Koneksi Berhasil";
?>