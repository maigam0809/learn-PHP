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
  $sql = "INSERT INTO `khach_hang` (`ten_dem`, `ten`, `dia_chi`, `email`, `dien_thoai`) VALUES
  ('Mai', 'Gam', 'Nam Dinh', 'maigam08092000@gmail.com', '0344358618'),
  ('Luong', 'Tu', 'Ha Noi', 'luongtu996@gmail.com', '0376864926'),
  ('Dang', 'Phuong', 'Hai Duong', 'dangphuong@gmail.com', '05434343284')
  ";

  // cách tạo ma khach  nhân lên số lần đó là hang cách tự động đó chính là auto_increment trong PHP
  // use exec() because no results are returned: dùng exec() bởi vì nó không trả về kết quả.
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} catch (PDOException $e) {
  echo "Inseart into failed: " . $e->getMessage();
}
$conn = null;
