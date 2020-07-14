<?php
$x =  10;
if ($x > 10) {
  echo "Số $x > 10 ";
} elseif ($x == 10) {
  echo "Số $x = 10 ";
} else {
  echo 'Số' . $x . '< 10';
}

// Phat biểu switch case 
switch ($x) {
  case 1:
    echo " bạn chọn lệnh 1";
    break;
  case 2:
    echo " Bạn chọn lệnh 2";
    break;
  default:
    echo "bạn chọn lệnh không phù hợp";
}
