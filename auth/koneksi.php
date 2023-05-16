<?php
$host = 'localhost';
$dbname = 'samdut';
$usernm = 'root';
$pass = '';

$mysqli = mysqli_connect($host, $usernm, $pass, $dbname);

if(!$mysqli){
    die("Koneksi gagal" . mysqli_connect_error());

}
echo"Koneksi Berhasil";
?>