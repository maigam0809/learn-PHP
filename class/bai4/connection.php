<?php
$serverName = 'localhost'; // tên server
$userName = 'root'; // userName truy cập vào database của mysql
$password = ''; // mật khẩu của password
$dbName = '1531a-php1'; // mật khẩu của password

try {
  // tạo đối tượng kết nối PDO
  $conn = new PDO("mysql:host=$serverName; dbname=$dbName;charset=utf8",$userName,$password);
  // echo "Created database sussesfully";
} catch (PDOException $e) {
  echo "Lỗi kết nối cơ sở dữ liệu <br>" . $e->getMessage();
}

