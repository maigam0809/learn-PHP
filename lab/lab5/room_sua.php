<?php
require_once "../connection.php";
if(isset($_POST['btnLuu'])){
  // var_dump($_REQUEST);
  extract($_REQUEST);

  // Nếu người dùng cập nhật ảnh thì 
  if($_FILES['image']['size'] >0){
    $image = $_FILES['image']['name'];
  }
  $sql = "UPDATE rooms SET name ='$name',hotel_id = '$hotel_id',price = '$price', image ='$image', detail = '$detail', status = '$status' WHERE room_id = $room_id";

  // Chuẩn bị đẻ thực hiện 
  $stmt = $conn->prepare($sql);
  // Thực thi
  if($stmt->execute()){
    $message = "Cập nhật dữ liệu thành công"; 
    // Cập nhật ảnh lên server
    if($_FILES['image']['size'] >0){
      move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$image);
    }
    
  }else{
    $message = " Không thể  cập nhật dữ liệu."; 
  }
}
// Lấy id trên thanh URL
$id = $_GET['id'];
// echo $id;
// Câu lệnh sql theo điều kiện id
$sql = "SELECT * FROM rooms WHERE room_id = $id";
// Chuẩn bị
$stmt = $conn->prepare($sql);
// Thực thi
$stmt->execute();
// Lấy 1 dòng dữ liệu
$result = $stmt->fetch(PDO::FETCH_ASSOC);
// Đổ dữ liệu vào form
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
  <h2>Cập nhật danh mục bảng rooms</h2>
  <form action="" method="post" enctype="multipart/form-data" class="form_dang_nhap">
  <input type="hidden" class="input_dang_nhap" name="room_id" value="<?= $result['room_id']?>" id=""> 
    <input type="text" class="input_dang_nhap" name="name" value="<?= $result['name']?>" id="" placeholder="Name">
    <select name="hotel_id" id="hotel_id" class="input_dang_nhap" >
      <?php
      foreach ($hotels as $item) : ?>
        <option value="<?= $item['hotel_id'] ?>"><?= $item['name'] ?></option>
      <?php endforeach; ?>
    </select>

    <input type="number" class="input_dang_nhap" name="price" value="<?= $result['price']?>" id="" placeholder="price">
    <input type="file" class="input_dang_nhap input_avatar" name="image" id="" placeholder="Avatar">

    <?php if(!empty($result['image'])) : ?>
      <br>
      <input type="hidden" name="image" value="<?= $result['image']?>">
      <img src="../images/<?= $result['image'] ?>" alt="" width="120" srcset="">
    <?php endif; ?>
    <br>

    <textarea name="detail" id="" cols="30" rows="10" placeholder="Detail">
      <?= $result['detail']?>
    </textarea>
    
    <input type="number" class="input_dang_nhap" name="status" value="<?= $result['status']?>" id="" placeholder="status">
    <br>
    <button type="submit" name="btnLuu" class="input_dang_nhap btn">Lưu</button>
  </form>


</body>

</html>