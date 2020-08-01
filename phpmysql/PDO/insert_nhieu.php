<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "ql_khach_hang";

try {
  $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction : câu lệnh này bắt đầu khối lệnh một tập hợp các giữ liệu insert-into
  $conn->beginTransaction();
 
  // sql to create table
  $conn->exec ("INSERT INTO san_pham ( mo_ta, so_luong, don_gia, ten_sp) VALUE ( 'a', 234, 123, 'but')");
  $conn->exec ("INSERT INTO san_pham ( mo_ta, so_luong, don_gia, ten_sp) VALUE ( 'b', 1, 3, 'bi')");
  $conn->exec ("INSERT INTO san_pham ( mo_ta, so_luong, don_gia, ten_sp) VALUE ( 'd', 3, 1, 'muc')");

  // commit the transaction: giao dịch được cam kết
  $conn->commit();

  // $conn->exec($sql); lệnh này được tháo ngỡ bởi vì ta đã sử dụng lệnh commit để đẩy các insert của bảng lên
  echo "New records insert into successfully";
} catch (PDOException $e) {
  $conn->rollback();
  echo "Error" . $e->getMessage();
}
$conn = null;

