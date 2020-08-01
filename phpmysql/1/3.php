<?php
require_once "./1.php";
if (isset($_POST['btnLuu'])) {
  $cate_id = $_POST['cate_id'];
  $pro_name = $_POST['pro_name'];
  $intro = $_POST['intro'];
  $detail = $_POST['detail'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  // kiểm tra xem người người dùng có đưa ảnh vào trong form hay không

  if ($_FILES['pro_image']['size']) {
    // Lưu lại tên file
    $pro_image = $_FILES['pro_image']['name'];
  } else {
    // $cate_image ="";
    $pro_image = "";
  }

  // Câu lệnh sql insert into
  $sql = "INSERT INTO products (cate_id,pro_name,pro_image,intro,detail,price,quantity) VALUES ('$cate_id','$pro_name','$pro_image','$intro','$detail','$price','$quantity')";
  

  // CHUẨN BỊ 
  $stmt = $conn->prepare($sql);
  // Thực thi thành công thig upload ảnh lên server
  if ($stmt->execute()) {
    // Upload ảnh lên server
    if (!empty($pro_image)) {
      move_uploaded_file($_FILES['pro_image']['tmp_name'], './images/' . $pro_image);
    }
    header("location:2.php?message=Thêm dữ liệu thành công");
    die;
  } else {
    echo "Thêm dữ liệu bị thất bại";
  }
}


$sqlCategory = "SELECT * from categoriees";
$stmtC = $conn->prepare($sqlCategory);
$stmtC->execute();
//Lấy dữ liệu ra bằng trong đó fetch-assoc lấy về dạng bảng khóa là tên cột giữ liệu 
$categories = $stmtC->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm danh mục </title>
</head>

<body>
  <h2>Thêm danh mục </h2>

  <form action="" method="post" enctype="multipart/form-data">
    <label for="cate_id">Tên Cate ID</label>
    <select name="cate_id" id="cate_id">
      <?php
      foreach ($categories as $item) : ?>
        <option value="<?= $item['cate_id'] ?>"><?= $item['cate_name'] ?></option>
      <?php endforeach; ?>
    </select>
    <br>
    <input type="number" name="cate_id" id="">
    <br>
    <label for="">Tên sản phẩm</label>
    <br>
    <input type="text" name="pro_name" id="">
    <br>
    <label for="">Hình ảnh sản phẩm</label>
    <br>
    <input type="file" name="pro_image" id="">
    <br>
    <label for="">Intro</label>
    <textarea name="intro" id="" cols="10" rows="2"></textarea>
    <br>
    <label for="">Detail</label>
    <textarea name="detail" id="" cols="10" rows="2"></textarea>
    <br>
    <label for="">Giá sản phẩm</label>
    <br>
    <input type="number" name="price" id="">
    <br>
    <label for="">Số lượng</label>
    <br>
    <input type="number" name="quantity" id="">
    <br>
    <button type="submit" name="btnLuu">Lưu</button>
  </form>

</body>

</html>