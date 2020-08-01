<?php
if(isset($_POST['btnGui'])){
  
  if(isset($_POST['thanhpho']) || isset($_POST['sothich'])){
    $thanhpho = $_POST['thanhpho'];
    var_dump($thanhpho);
    $sothich = $_POST['sothich'];
    var_dump($sothich);
  }else{
    echo "Bạn chưa chọn gì .Mời bạn chọn lại.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <select name="thanhpho[]" multiple="4" id="">
      <option value="HN">Hà Nội</option>
      <option value="HP">Hải Phòng</option>
      <option value="QN">Quảng Ninh</option>
      <option value="KH">Khánh Hòa</option>
      <option value="ND">Nam Định</option>
      <option value="DN">Đà Nẵng</option>
    </select>
    <br>
    <label for="">Sở thích</label><br>
    <input type="checkbox" name="sothich[]" value="Bóng đá" id="">Bóng đá <br>
    <input type="checkbox" name="sothich[]" value="Bóng rổ" id="">Bóng rổ <br>
    <input type="checkbox" name="sothich[]" value="Bóng truyền" id="">Bóng truyền <br>
    <input type="checkbox" name="sothich[]" value="Mua sắm" id="">Mua sắm <br>
    <input type="checkbox" name="sothich[]" value="Du lịch" id="">Du lịch <br>

    <button type="submit" name="btnGui">Gửi</button>
  </form>
</body>

</html>