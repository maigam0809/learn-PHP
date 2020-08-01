<?php
require_once "../connection.php";
if(isset($_POST['btnLuu'])){
  // var_dump($_REQUEST);
  extract($_REQUEST);

  // Nếu người dùng cập nhật ảnh thì 
  if($_FILES['avatar']['size'] >0){
    $avatar = $_FILES['avatar']['name'];
  }
  $sql = "UPDATE users SET username ='$username',password = '$password',email = '$email', avatar ='$avatar', role = '$role' WHERE user_id = $user_id";

  // Chuẩn bị đẻ thực hiện 
  $stmt = $conn->prepare($sql);
  // Thực thi
  if($stmt->execute()){
    $message = "Cập nhật dữ liệu thành công"; 
    // Cập nhật ảnh lên server
    if($_FILES['avatar']['size'] >0){
      move_uploaded_file($_FILES['avatar']['tmp_name'],"../images/".$avatar);
    }
    
  }else{
    $message = " Không thể  cập nhật dữ liệu."; 
  }
}
// Lấy id trên thanh URL
$id = $_GET['id'];
// echo $id;
// Câu lệnh sql theo điều kiện id
$sql = "SELECT * FROM users WHERE user_id = $id";
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
    label{
      font-weight: 700;
      font-size: 16px;
      padding: 10 15 10 0;

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
    .input_avatar{
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
    h4{
      text-align: center;
      padding: 30px 20px 20px 0;
      color: red;
      font-size: 20px;

    }
  </style>
</head>

<body>
<?php if(isset($message)):?>
  <h4><?= $message ?></h4>
  <?php endif; ?>
  <h2>Cập nhật danh mục bảng users</h2>
  <form action="" method="post" enctype="multipart/form-data" class="form_dang_nhap">
  <input type="hidden" class="input_dang_nhap" name="user_id" value="<?= $result['user_id']?>" id=""> 
    <input type="text" class="input_dang_nhap" name="username" value="<?= $result['username']?>" id="" placeholder="Username">
    <input type="password" class="input_dang_nhap" name="password" value="<?= $result['password']?>" id="" placeholder="Password">
    <input type="email" class="input_dang_nhap" name="email" value="<?= $result['email']?>" id="" placeholder="Email">
    <input type="file" class="input_dang_nhap input_avatar" name="avatar" id="" placeholder="Avatar">
    <?php if(!empty($result['avatar'])) : ?>
      <br>
      <input type="hidden" name="avatar" value="<?= $result['avatar']?>">
      <img src="../images/<?= $result['avatar'] ?>" alt="" width="120" srcset="">
    <?php endif; ?>
    <input type="number" class="input_dang_nhap" name="role" value="<?= $result['role']?>" id="" placeholder="Role">
    <br>
    <button type="submit" name="btnLuu" class="input_dang_nhap btn">Lưu</button>
  </form>


</body>

</html>