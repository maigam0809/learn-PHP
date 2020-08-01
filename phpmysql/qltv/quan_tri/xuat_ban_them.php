<?php

require_once "../connection.php";
if (isset($_POST['btnLuu'])) {
  // $ma_xuat_ban = $_POST['ma_xuat_ban'];
  $ten_nha_xuat_ban = $_POST['ten_nha_xuat_ban'];
  // var_dump($_FILES['cate_image']);
  // kiểm tra xem người người dùng có đưa ảnh vào trong form hay không

  // if ($_FILES['avatar']['size']) {
  //   // Lưu lại tên file
  //   $avatar = $_FILES['avatar']['name'];
  // } else {
  //   $avatar = "";
  // }

  // Câu lệnh sql insert into
  $sql = "INSERT INTO xuat_ban (ma_xuat_ban,ten_nha_xuat_ban) VALUES ('$ma_xuat_ban','$ten_nha_xuat_ban')";
  // CHUẨN BỊ 
  $stmt = $conn->prepare($sql);
  // Thực thi thành công thig upload ảnh lên server
  if ($stmt->execute()) {
    // Upload ảnh lên server
    // if (!empty($avatar)) {
    //   move_uploaded_file($_FILES['avatar']['tmp_name'], '../images/' . $avatar);
    // }
    header("location:xuat_ban.php?message=Thêm dữ liệu thành công");
    die;
  } else {
    echo "Thêm dữ liệu bị thất bại";
  }
}
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
    .input_dang_nhap {
      width: 100%;
      padding: 7px 10px 7px 0px;
      margin-bottom: 20px;
      border: none;
      border-bottom: 1px solid darkgray;
      outline: none;
      font-size: 16px;

    }
    .input_file{
      border:none;
     
    }
    .btn{
      background-color: red;
      border:none;
      color:white;
      border-radius: 20px;
      font-size: 16px;
      font-weight: bold;

    }
    .btn:hover{
      background-color: brown;
      
    }
    
  </style>
</head>

<body>
  <h2>Thêm Dữ liệu từ người dùng </h2>
  <form action="" class="form_dang_nhap" method="post" enctype="multipart/form-data">
    <!-- <input type="number" class="input_dang_nhap" name="ma_xuat_ban" id="" placeholder="mã nhà xuất bản" required> -->
    <input type="text" class="input_dang_nhap" name="ten_nha_xuat_ban" id="" placeholder="Tên nhà xuất bản" required>
    <button type="submit" class="btn input_dang_nhap" name="btnLuu">Lưu</button>
  </form>

</body>

</html>