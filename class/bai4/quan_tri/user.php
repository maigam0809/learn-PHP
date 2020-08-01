<?php
require_once "../connection.php";
$sql = "SELECT * from users"; // câu lệnh sql select\
// echo $sql;
// chuẩn bị
$stmt = $conn->prepare($sql);
// Thực hiện
$stmt->execute();
//Lấy dữ liệu ra bằng trong đó fetch-assoc lấy về dạng bảng khóa là tên cột giữ liệu 
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bảng hiển thị user người dùng nhập vào</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      width: 1000px;
      margin: 0px auto;
    }

    h2 {
      color: black;
      font-size: 28px;
      text-align: center;
      padding: 20px;
      font-family: 'Asap', sans-serif;
      text-transform: capitalize;
    }

    .btn {
      margin-bottom: 50px;
    }

    .btn a {
      float: right;
      text-decoration: none;
      color: black;
      font-size: 15px;
      font-weight: bold;
      background-color: peru;
      padding: 10px;
      border: none;
      border-radius: 20px;

    }

    .btn a:hover {
      background-color: peachpuff;
      color: blue;
    }

    table {
      margin-top: 20px;
      width: 100%;
      text-align: center;
    }

    .a_action {
      padding: 7px;
    }
  </style>
</head>

<body>
  <h2>Thông tin người dùng mới nhập</h2>
  <div class="btn">
    <a href="them_user.php">Thêm người dùng</a>
  </div>
  <table border="1">
    <tr>
      <th>User ID</th>
      <th>UserName</th>
      <th>Password</th>
      <th>Email</th>
      <th>Avata</th>
      <th>Role</th>
      <th>Action</th>

    </tr>
    <!-- Đổ dữ liệu từ bảng vào  -->
    <?php
    foreach ($result as $item) : ?>
      <tr>
        <td><?= $item['user_id'] ?></td>
        <td><?= $item['username'] ?></td>
        <td><?= $item['password'] ?></td>
        <td><?= $item['email'] ?></td>
        <td><img src="../images/<?= $item['avatar'] ?>" width="120px" alt="" srcset=""></td>
        <td><?= $item['role'] ?></td>
        <td>
          <a href="cap_nhat_user.php?id=<?= $item['user_id'] ?>" class="a_action">Sửa</a>
          <a onclick="return confirm('Bạn có chắc chắn xóa không ?')" class="a_action" href="xoa_user.php?id=<?= $item['user_id'] ?>">Xóa</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

</body>

</html>