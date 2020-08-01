<?php
require_once "../connection.php";
if(isset($_POST['btnLuu'])){
  // var_dump($_REQUEST);
  extract($_REQUEST);

  // Nếu người dùng cập nhật ảnh thì 
  if($_FILES['cate_image']['size'] >0){
    $cate_image = $_FILES['cate_image']['name'];
  }
  $sql = "UPDATE categoriees SET cate_name ='$cate_name', cate_image ='$cate_image', description = '$description' WHERE cate_id = $cate_id";

  // Chuẩn bị đẻ thực hiện 
  $stmt = $conn->prepare($sql);
  // Thực thi
  if($stmt->execute()){
    $message = "Cập nhật dữ liệu thành công"; 
    // Cập nhật ảnh lên server
    if($_FILES['cate_image']['size'] >0){
      move_uploaded_file($_FILES['cate_image']['tmp_name'],"../images/".$cate_image);
    }
    // header("location:sua_danh_muc.php?message=Thêm dữ liệu thành công");
    // die;
  }else{
    $message = " Không thể  cập nhật dữ liệu."; 
  }
}
// Lấy id trên thanh URL
$id = $_GET['id'];
// echo $id;
// Câu lệnh sql theo điều kiện id
$sql = "SELECT * FROM categoriees WHERE cate_id = $id";
// Chuẩn bị
$stmt = $conn->prepare($sql);
// Thực thi
$stmt->execute();
// Lấy 1 dòng dữ liệu
$result = $stmt->fetch(PDO::FETCH_ASSOC);
// Đổ dữ liệu vào form

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cập nhật danh mục </title>
</head>

<body>
  <h2>Cập nhật danh mục </h2>
  <?php if(isset($message)):?>
  <h4><?= $message ?></h4>
  <?php endif; ?>

  <form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="cate_id" value="<?= $result['cate_id']?>" id="">
    <label for="">Tên danh mục</label>
    <br>
    <input type="text" name="cate_name" value="<?= $result['cate_name']?>" id="">
    <br>
    <label for="">Hình ảnh</label>
    <br>
    <input type="file" name="cate_image" id="">
    <?php if(!empty($result['cate_image'])) : ?>
      <br>
      <input type="hidden" name="cate_image" value="<?= $result['cate_image']?>">
      <img src="../images/<?= $result['cate_image'] ?>" alt="" width="120" srcset="">
    <?php endif; ?>
    <br>
    <textarea name="description" id="" cols="130" rows="10"><?= $result['description'] ?></textarea>
    <br>
    <button type="submit" name="btnLuu">Lưu</button>
  </form>

</body>

</html>