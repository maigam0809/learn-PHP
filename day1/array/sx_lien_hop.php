<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sắp xếp mảng liên hợp trong PHP</title>
</head>
<body>
  <?php
  echo "1.Sắp xếp tăng dần theo Value. <br>";
  $array2=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");
  //sắp xếp tăng dần theo value:
  asort($array2);
  foreach($array2 as $y=>$y_value){
    echo "Tuổi của " .$y." là: ". $y_value. "<br>";
  }
  echo "2.Sắp xếp tăng dần theo Key. <br>";
  $array3=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");
  //sắp xếp tăng dần theo key:
  ksort($array3);
  foreach($array3 as $y=>$y_key){
    echo "Tuổi của " .$y." là: ". $y_key. "<br>";
  }
  echo "3.Sắp xếp giảm dần theo Value. <br>";
  $array4=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");
  //sắp xếp giảm dần theo value:
  arsort($array4);
  foreach($array4 as $y=>$y_value){
    echo "Tuổi của " .$y." là: ". $y_value. "<br>";
  }
  echo "4.Sắp xếp giảm dần theo keys. <br>";
  $array5=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");
  //sắp xếp giamr dần theo key:
  krsort($array5);
  foreach($array5 as $y=>$y_key){
    echo "Tuổi của " .$y." là: ". $y_key. "<br>";
  }
  ?>
</body>
</html>