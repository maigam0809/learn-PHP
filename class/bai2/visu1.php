<?php
  if(isset($_POST['btn'])){
    $n = $_POST['son'];
    $tich = 1;
    for($i = 1; $i <=$n ;$i++){
      $tich *=$i;
    }
    
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tính giai thừa</title>
</head>

<body>
  <form action="" method="post">
    <label for="">Nhập vào số cần tính</label>
    <input type="number" name="son" value="<?= isset($son) ? $son : 0 ?>" id="" min="0">
    <br>
    <button type="submit" name="btn" value="">Tính</button>
    <?php
    if(isset($tich)){
      echo "<br>Giai thừa của số $n là : $n! = ".$tich ."<br>";
    }
    ?>
  </form>

</body>

</html>