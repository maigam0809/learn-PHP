<?php

require_once "../connection.php";
if (isset($_POST['btnLuu'])) {
  $ten_sinh_vien = $_POST['ten_sinh_vien'];
  $ngay_het_han_the = $_POST['ngay_het_han_the'];
  $ma_chuyen_nganh = $_POST['ma_chuyen_nganh'];
  $email = $_POST['email'];
  $sdt = $_POST['sdt'];
  // var_dump($ma_chuyen_nganh);
  // Câu lệnh sql insert into
  $sql = "INSERT INTO sinh_vien (ten_sinh_vien,ngay_het_han_the,ma_chuyen_nganh,email,sdt) VALUES ('$ten_sinh_vien','$ngay_het_han_the','$ma_chuyen_nganh','$email','$sdt')";
  // echo $sql;
  // CHUẨN BỊ 
  $stmt = $conn->prepare($sql);
  // Thực thi thành công thig upload ảnh lên server
  if ($stmt->execute()) {
    header("location:sinh_vien.php?message=Thêm dữ liệu thành công");
    die;
  } else {
    echo "Thêm dữ liệu bị thất bại";
  }
}
$sqlCN = "SELECT * from chuyen_nganh";
// echo $sqlCN;
$stmtC = $conn->prepare($sqlCN);
$stmtC->execute();
//Lấy dữ liệu ra bằng trong đó fetch-assoc lấy về dạng bảng khóa là tên cột giữ liệu 
$chuyenNganh = $stmtC->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form thêm dữ liệu từ người dùng</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      width: 500px;
      margin: 50px auto;
    }

    h2 {
      color: black;
      font-size: 28px;
      text-align: center;
      padding: 20px;
      font-family: 'Asap', sans-serif;
      text-transform: capitalize;
    }

    .form_dang_nhap {
      padding: 50px;
      border: 1px solid red;
      border-radius: 50px;
      box-shadow: 0px 0px 0px red, 0px 0px 10px red;
    }

    #ma_chuyen_nganh {
      width: 100%;
      padding: 7px 10px 7px 0px;
      margin-bottom: 20px;
      border: none;
      border-bottom: 1px solid darkgray;
      outline: none;
      font-size: 16px;
    }

    .input_dang_nhap {
      width: 100%;
      padding: 7px 10px 7px 0px;
      margin-bottom: 20px;
      border: none;
      border-bottom: 1px solid darkgray;
      outline: none;
      font-size: 16px;

    }

    .input_file {
      border: none;

    }

    .btn {
      background-color: red;
      border: none;
      color: white;
      border-radius: 20px;
      font-size: 16px;
      font-weight: bold;

    }

    .btn:hover {
      background-color: brown;

    }
  </style>
</head>

<body>
  <h2>Thêm Dữ bảng sinh viên </h2>
  <form action="" class="form_dang_nhap" method="post" enctype="multipart/form-data">
    <input type="text" class="input_dang_nhap" name="ten_sinh_vien" id="" placeholder="Tên sinh viên" required>
    <input type="date" class="input_dang_nhap" name="ngay_het_han_the" id="" placeholder="Ngày hết hạn thẻ" required>
    <select name="ma_chuyen_nganh" id="ma_chuyen_nganh">
      <?php
      foreach ($chuyenNganh as $item) : ?>
        <option value="<?= $item['ma_chuyen_nganh'] ?>"><?= $item['ten_chuyen_nganh'] ?></option>
      <?php endforeach; ?>
    </select>
    <input type="text" class="input_dang_nhap" name="email" id="" placeholder="Email" required>
    <input type="text" class="input_dang_nhap" name="sdt" id="" placeholder="Số điện thoại" required>
    <button type="submit" class="btn input_dang_nhap" name="btnLuu">Lưu</button>
  </form>

</body>

</html>