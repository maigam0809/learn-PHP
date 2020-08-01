<?php

require_once "../connection.php";
if (isset($_POST['btnLuu'])) {
  $tieu_de = $_POST['tieu_de'];
  $ma_tac_gia = $_POST['ma_tac_gia'];
  $ma_xuat_ban = $_POST['ma_xuat_ban'];
  $so_trang = $_POST['so_trang'];
  $so_luong_ban_sao = $_POST['so_luong_ban_sao'];
  $gia_tien = $_POST['gia_tien'];
  $ngay_nhap_kho = $_POST['ngay_nhap_kho'];
  $vi_tri_dat_sach = $_POST['vi_tri_dat_sach'];
  $ma_loai_sach = $_POST['ma_loai_sach'];


  $sql = "INSERT INTO sach (tieu_de,ma_tac_gia,ma_xuat_ban,so_trang,so_luong_ban_sao,gia_tien,ngay_nhap_kho,vi_tri_dat_sach,ma_loai_sach) VALUES ('$tieu_de','$ma_tac_gia','$ma_xuat_ban','$so_trang','$so_luong_ban_sao','$gia_tien','$ngay_nhap_kho','$vi_tri_dat_sach','$ma_loai_sach')";
  // echo $sql;
  // CHUẨN BỊ 
  $stmt = $conn->prepare($sql);

  // Thực thi thành công thig upload ảnh lên server
  if ($stmt->execute()) {
    header("location:sach.php?message=Thêm dữ liệu thành công");
    die;
  } else {
    echo "Thêm dữ liệu bị thất bại";
  }
}

// mã tác giả
$sqlTG = "SELECT * from tac_gia";
$stmtC = $conn->prepare($sqlTG);
$stmtC->execute();
$tacGia = $stmtC->fetchAll(PDO::FETCH_ASSOC);
// mã xuất bản  
$sqlXB = "SELECT * from xuat_ban";
$stmtX = $conn->prepare($sqlXB);
$stmtX->execute();
$xuatBan = $stmtX->fetchAll(PDO::FETCH_ASSOC);

// Mã loại sách
$sqlLS = "SELECT * from loai_sach";
$stmtL = $conn->prepare($sqlLS);
$stmtL->execute();
$loaiSach = $stmtL->fetchAll(PDO::FETCH_ASSOC);

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

    #ma_xuat_ban, #ma_tac_gia, #ma_loai_sach {
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
  <h2>Thêm Dữ bảng sách</h2>
  <form action="" class="form_dang_nhap" method="post" enctype="multipart/form-data">
    <input type="text" class="input_dang_nhap" name="tieu_de" id="" placeholder="Tiêu đề sách/ Tên sách" required>
    <label for="ma_tac_gia">Tên tác giả</label>
    <select name="ma_tac_gia" id="ma_tac_gia">
      <?php
      foreach ($tacGia as $item) : ?>
        <option value="<?= $item['ma_tac_gia'] ?>"><?= $item['ten_tac_gia'] ?></option>
      <?php endforeach; ?>
    </select>
    <label for="ma_xuat_ban">Tên nhà xuất bản</label>
    <select name="ma_xuat_ban" id="ma_xuat_ban">
      <?php
      foreach ($xuatBan as $item) : ?>
        <option value="<?= $item['ma_xuat_ban'] ?>"><?= $item['ten_nha_xuat_ban'] ?></option>
      <?php endforeach; ?>
    </select>
    <input type="number" class="input_dang_nhap" name="so_trang" id="" placeholder="Số trang" required>
    <input type="number" class="input_dang_nhap" name="so_luong_ban_sao" id="" placeholder="Số lượng bản sao" required>
    <input type="number" class="input_dang_nhap" name="gia_tien" id="" placeholder="Giá tiền" required>
    <input type="date" class="input_dang_nhap" name="ngay_nhap_kho" id="" placeholder="Ngày nhập kho" required>
    <input type="number" class="input_dang_nhap" name="vi_tri_dat_sach" id="" placeholder="Vị trí đặt sách" required>
    <label for="ma_loai_sach">Tên loại sách</label>
    <select name="ma_loai_sach" id="ma_loai_sach">
      <?php
      foreach ($loaiSach as $item) : ?>
        <option value="<?= $item['ma_loai_sach'] ?>"><?= $item['ten_loai_sach'] ?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit" class="btn input_dang_nhap" name="btnLuu">Lưu</button>
  </form>

</body>

</html>