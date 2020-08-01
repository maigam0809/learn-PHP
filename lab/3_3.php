<?php

function timMax(){
  $array = [2,54,65,23,12,45,3,5,7,5,75,3,5,3,6,5,4];
  $max = null;
  $index = null;
   
  for ($i = 0; $i < count($array); $i++)
  {
      if ($max == null){
          $max = $array[$i];
          $index = $i;
      }
      else {
          if ($array[$i] > $max){
              $max = $array[$i];
              $index = $i;
          }
      }
  }
 
  echo 'Giá trị max của arr là : '.$max;
  echo '<br>Vị Trí lớn nhất của mảng là: '.$index;
}
echo timMax();


?>
