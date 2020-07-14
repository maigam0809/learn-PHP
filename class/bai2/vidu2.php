<!-- bài tập 1: 
Cho 1 mnagr $arr =[1,2,5,8,9,11,22,24,28,53,23,19];
1. Hãy tìm và in ra có bao nhiêu số lẻ
2. Đếm xem mảng đó có bao nhiêu số lẻ -->
<?php
$arr = [1, 2, 5, 8, 9, 11, 22, 24, 28, 53, 23, 29];
$count =0;
echo "<br>Số lẻ không chia hết cho 2 là :";
foreach ($arr as $item) {
  if($item % 2 == 1){
    $count ++;
    echo " $item <nbsp>";
  }

}
echo "<br>Tổng các số không chia hết cho 2 là : $count";



