<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum8";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
?>