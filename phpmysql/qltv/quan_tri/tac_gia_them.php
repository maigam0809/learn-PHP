<?php

require_once "../connection.php";
if (isset($_POST['btnLuu'])) {
  $ten_tac_gia = $_POST['ten_tac_gia'];
 

  // Câu lệnh sql insert into
  $sql = "INSERT INTO tac_gia (ten_tac_gia) VALUES ($ten_tac_gia')";
  // CHUẨN BỊ 
  $stmt = $conn->prepare($sql);
  // Thực thi thành công thig upload ảnh lên server
  if ($stmt->execute()) {
    // Upload ảnh lên server
    // if (!empty($avatar)) {
    //   move_uploaded_file($_FILES['avatar']['tmp_name'], '../images/' . $avatar);
    // }
    header("location:tac_gia.php?message=Thêm dữ liệu thành công");
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
  <h2>Thêm Dữ bảng tác giả </h2>
  <form action="" class="form_dang_nhap" method="post" enctype="multipart/form-data">
    <input type="text" class="input_dang_nhap" name="ten_tac_gia" id="" placeholder="Tên tác giả" required>
    <button type="submit" class="btn input_dang_nhap" name="btnLuu">Lưu</button>
  </form>

</body>

</html>