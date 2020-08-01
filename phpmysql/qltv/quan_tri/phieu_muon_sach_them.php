<?php

require_once "../connection.php";
if (isset($_POST['btnLuu'])) {
  $ngay_muon_sach = $_POST['ngay_muon_sach'];
  $ngay_tra = $_POST['ngay_tra'];
  $ma_sinh_vien = $_POST['ma_sinh_vien'];
 


  $sql = "INSERT INTO phieu_muon_sach (ngay_muon_sach,ngay_tra,ma_sinh_vien) VALUES ('$ngay_muon_sach','$ngay_tra','$ma_sinh_vien')";
  // echo $sql;
  // CHUẨN BỊ 
  $stmt = $conn->prepare($sql);

  // Thực thi thành công thig upload ảnh lên server
  if ($stmt->execute()) {
    header("location:phieu_muon_sach.php?message=Thêm dữ liệu thành công");
    die;
  } else {
    echo "Thêm dữ liệu bị thất bại";
  }
}

// mã sinh viên
$sqlSV = "SELECT * from sinh_vien";
// echo $sqlCN;
$stmtC = $conn->prepare($sqlSV);
$stmtC->execute();
//Lấy dữ liệu ra bằng trong đó fetch-assoc lấy về dạng bảng khóa là tên cột giữ liệu 
$sinhVien = $stmtC->fetchAll(PDO::FETCH_ASSOC);
// mã xuất bản  


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

    #ma_sinh_vien{
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
  <h2>Thêm DL bảng phiếu mượn sách</h2>
  <form action="" class="form_dang_nhap" method="post" enctype="multipart/form-data">
    <input type="date" class="input_dang_nhap" name="ngay_muon_sach" id="" placeholder="Ngày mượn sách" required>
    <input type="date" class="input_dang_nhap" name="ngay_tra" id="" placeholder="Ngày trả" required>
    <select name="ma_sinh_vien" id="ma_sinh_vien">
      <?php
      foreach ($sinhVien as $item) : ?>
        <option value="<?= $item['ma_sinh_vien'] ?>"><?= $item['ten_sinh_vien'] ?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit" class="btn input_dang_nhap" name="btnLuu">Lưu</button>
  </form>

</body>

</html>