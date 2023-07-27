<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userwebsiteklmk";

// Buat Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
// Periksa Koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>