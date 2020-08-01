<?php
require_once "../connection.php";

// Lấy id trên thanh URL
$id = $_GET['id'];
// echo $id;
// Câu lệnh sql theo điều kiện id
$sql = "DELETE FROM categoriees WHERE cate_id = $id";
// Chuẩn bị
$stmt = $conn->prepare($sql);
// Thực thi
if($stmt->execute()){
  header("location:sua_danh_muc.php?message=Xóa dữ liệu thành công");
  die;
}
?>
