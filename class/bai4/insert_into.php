<?php
$serverName = 'localhost'; // tên server
$userName = 'root'; // userName truy cập vào database của mysql
$password = ''; // mật khẩu của password
$dbName = '1531a-php1'; // mật khẩu của password

try {
  // tạo đối tượng kết nối PDO
  $conn = new PDO("mysql:host=$serverName; dbname=$dbName;charset=utf8", $userName, $password);
  $sql = "INSERT INTO products (pro_name,pro_image,intro,detail,price,quantity) VALUES ('Nokia 247','nokia.jpg','Nokia 247 là một trong những sản phẩm nổi tiếng','Sản phẩm đều là chính hãng',1000,34)";
  $sql = "INSERT into categoriees(cate_name,cate_image,description) VALUES ('Nokia','nokia.jpg','Đây là sản phẩm nokia đã từ lâu');";
  $conn->exec($sql);
  echo "Inserted into  sussessfully.";
} catch (PDOException $e) {
  echo "Lỗi kết nối cơ sở dữ liệu <br>" . $e->getMessage();
}

$conn = null;
?>