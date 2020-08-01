<?php

require_once "../connection.php";
if (isset($_POST['btnLuu'])) {
  $ma_sach = $_POST['ma_sach'];
  $ma_phieu = $_POST['ma_phieu'];
  
  $sql = "INSERT INTO chi_tiet_phieu (ma_sach,ma_phieu) VALUES ('$ma_sach','$ma_phieu')";
  // echo $sql;
  // CHUẨN BỊ 
  $stmt = $conn->prepare($sql);
  // Thực thi thành công thig upload ảnh lên server
  if ($stmt->execute()) {
    header("location:chi_tiet_phieu.php?message=Thêm dữ liệu thành công");
    die;
  } else {
    echo "Thêm dữ liệu bị thất bại";
  }
}
$sqlS = "SELECT * from sach";
$stmtC = $conn->prepare($sqlS);
$stmtC->execute();
$sach = $stmtC->fetchAll(PDO::FETCH_ASSOC);

// Dữ liệu của phiếu mượn
$sqlPM = "SELECT * from phieu_muon_sach";
$stmtP = $conn->prepare($sqlPM);
$stmtP->execute();
$phieuMuon = $stmtP->fetchAll(PDO::FETCH_ASSOC);
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

    #ma_phieu, #ma_sach {
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
  <h2>Thêm Dữ bảng chi tiết phiếu </h2>
  <form action="" class="form_dang_nhap" method="post" enctype="multipart/form-data">
    
    <select name="ma_phieu" id="ma_phieu">
      <?php
      foreach ($phieuMuon as $item) : ?>
        <option value=""><?= $item['ma_phieu'] ?></option>
      <?php endforeach; ?>
    </select>
    <select name="ma_sach" id="ma_sach">
      <?php
      foreach ($sach as $item) : ?>
        <option value="<?= $item['ma_sach'] ?>"><?= $item['tieu_de'] ?></option>
      <?php endforeach; ?>
    </select>
  
    <button type="submit" class="btn input_dang_nhap" name="btnLuu">Lưu</button>
  </form>

</body>

</html>