<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "ql_khach_hang";

try {
  $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "INSERT INTO san_pham (ma_san_pham, mo_ta, so_luong, don_gia, ten_sp)
  VALUE (1, 'a', 234, 123, 'but')";
  $conn->exec($sql);
  echo "Insert into successfully";
} catch (PDOException $e) {
  echo "Inseart into failed: " . $e->getMessage();
}
$conn = null;

