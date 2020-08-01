<?php
  require_once "./1.php";
  // $sql = "SELECT cate_id,cate_name,cate_image,description FROM categoriees ";
  $sql = "SELECT * from categoriees C INNER JOIN products P on C.cate_id=P.cate_id ";
  // câu lệnh sql select\
  echo "<br>".$sql;
  // chuẩn bị
  $stmt = $conn->prepare($sql);
  // Thực hiện
  $stmt->execute();
  //Lấy dữ liệu ra bằng trong đó fetch-assoc lấy về dạng bảng khóa là tên cột giữ liệu 
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sửa danh mục danh sách sản phẩm</title>
  <style>
    body{
      width: 1000px;
      margin: 50px auto;
    }
  </style>
</head>
<body>
  <h2>Tiêu đề của danh mục sản phẩm </h2>
  <a href="./3.php">Thêm danh mục</a>
  <table border="1">
    <tr>
      <th>ID Cate</th>
      <th>Cate Name</th>
      <th>Cate Image</th>
      <th>Description</th>
      <th>Name Pro</th>
      <th>Image Pro</th>
      <th>Intro</th>
      <th>Detail</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr> 
    <!-- Đổ dữ liệu từ bảng vào  -->
    <?php
    foreach($result as $item): ?>
    <tr>
      <td><?= $item['cate_id']?></td>
      <td><?= $item['cate_name']?></td>
      <td><img src="./images/<?=$item['cate_image']?>" width="60px" alt="" srcset=""></td>
      <td><?= $item['description']?></td>
      <td><?= $item['pro_name']?></td>
      <td><img src="./images/<?=$item['pro_image']?>" width="60px" alt="" srcset=""></td>
      <td><?= $item['intro']?></td>
      <td><?= $item['detail']?></td>
      <td><?= $item['price']?></td>
      <td><?= $item['quantity']?></td>
    </tr>
    <?php endforeach; ?>

  </table>
  
</body>
</html>