<?php
$db_host = 'database-1.ck8jzp2twzg8.us-east-1.rds.amazonaws.com';
$db_user = 'admin';
$db_pass = 'admin123';
$db_name = 'aidandb';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// tampilkan error PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
