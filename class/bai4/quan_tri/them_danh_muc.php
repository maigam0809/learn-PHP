<?php
  require_once "../connection.php";
  if(isset($_POST['btnLuu'])){
    $cate_name =$_POST['cate_name'];
    $description =$_POST['description'];
    // var_dump($_FILES['cate_image']);
    // kiểm tra xem người người dùng có đưa ảnh vào trong form hay không

    if($_FILES['cate_image']['size']){
      // Lưu lại tên file
      $cate_image = $_FILES['cate_image']['name'];
    }else{
      $cate_image ="";
    }

    // Câu lệnh sql insert into
    $sql = "INSERT INTO categoriees (cate_name,cate_image,description) VALUES ('$cate_name','$cate_image','$description')";
    // CHUẨN BỊ 
    $stmt = $conn->prepare($sql);
    // Thực thi thành công thig upload ảnh lên server
    if($stmt->execute()){
      // Upload ảnh lên server
      if(!empty($cate_image)){
        move_uploaded_file($_FILES['cate_image']['tmp_name'],'../images/' . $cate_image);
      }
      header("location:danh_muc.php?message=Thêm dữ liệu thành công");
      die;
    }else{
      echo "Thêm dữ liệu bị thất bại";
    }

  }
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
    <label for="">Tên danh mục</label>
    <br>
    <input type="text" name="cate_name" id="">
    <br>
    <label for="">Hình ảnh</label>
    <br>
    <input type="file" name="cate_image" id="">
    <br>
    <textarea name="description" id="" cols="130" rows="10"></textarea>
    <br>
    <button type="submit" name="btnLuu">Lưu</button>
  </form>

</body>

</html>