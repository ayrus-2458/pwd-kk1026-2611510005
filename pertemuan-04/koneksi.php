<?php
// koneksi.php

mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$user = "root";
$password = "";
$database = "db_pwd_2611510005";

$koneksi = new mysqli(
  $host,
  $user,
  $password,
  $database
);

if ($koneksi->connect_errno) {
  http_response_code(500);
  exit("Koneksi database gagal: " .
    htmlspecialchars(
      $koneksi->connect_error,
      ENT_QUOTES,
      "UTF-8"
    ));
}

$koneksi->set_charset("utf8mb4");
