<?php
require_once "../connection.php";
if (isset($_POST['btnLuu'])) {
  $name = $_POST['name'];
  $hotel_id = $_POST['hotel_id'];
  $price = $_POST['price'];
  $detail = $_POST['detail'];
  $status = $_POST['status'];

  // var_dump($_FILES['cate_image']);
  // kiểm tra xem người người dùng có đưa ảnh vào trong form hay không

  if ($_FILES['image']['size']) {
    // Lưu lại tên file
    $image = $_FILES['image']['name'];
  } else {
    $image = "";
  }

  // Câu lệnh sql insert into
  $sql = "INSERT INTO rooms (name,hotel_id,image,price,detail,status) VALUES ('$name','$hotel_id','$image','$price','$detail','$status')";
  // CHUẨN BỊ 
  $stmt = $conn->prepare($sql);
  // Thực thi thành công thig upload ảnh lên server
  if ($stmt->execute()) {
    // Upload ảnh lên server
    if (!empty($image)) {
      move_uploaded_file($_FILES['image']['tmp_name'], '../images/' . $image);
    }
    header("location:room.php?message=Thêm dữ liệu thành công");
    die;
  } else {
    echo "Thêm dữ liệu bị thất bại";
  }
}
$sqlHotel= "SELECT * from hotels";
$stmtC = $conn->prepare($sqlHotel);
$stmtC->execute();
//Lấy dữ liệu ra bằng trong đó fetch-assoc lấy về dạng bảng khóa là tên cột giữ liệu 
$hotels = $stmtC->fetchAll(PDO::FETCH_ASSOC);
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
    textarea{
      width: 100%;
    }
  </style>
</head>

<body>
  <h2>Thêm Dữ liệu từ người dùng </h2>
  <form action="" class="form_dang_nhap" method="post" enctype="multipart/form-data">
    <input type="text" class="input_dang_nhap" name="name" id="" placeholder="Name" required>
    <select name="hotel_id" id="hotel_id" class="input_dang_nhap" >
      <?php
      foreach ($hotels as $item) : ?>
        <option value="<?= $item['hotel_id'] ?>"><?= $item['name'] ?></option>
      <?php endforeach; ?>
    </select>
    <input type="number" class="input_dang_nhap" name="price" id="" placeholder="Price" required>
    <input type="file" class="input_dang_nhap input_file" name="image" id="" required>
    <textarea name="detail" id="" class="" cols="30" rows="10"  placeholder="Detail" ></textarea>
    <input type="number" class="input_dang_nhap" name="status" id="" placeholder="Status" required>
    <button type="submit" class="btn input_dang_nhap" name="btnLuu">Lưu</button>
  </form>

</body>

</html>