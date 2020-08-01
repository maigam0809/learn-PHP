<?php
// Kiểm tra số nguyên tố 
function kiem_tra_so_nguyen_to ($n){
  $kt = true;// mặc định cho nos là số nguyên tố
  if($n <2){
    $kt = false;
  }else{ 
    for($i = 2; $i <= $n; $i++){
      if($n % $i == 0){
        $kt = false;
      break;
      }
    }
  }
  return $kt;
}

echo "Các số nguyên tố là : " . kiem_tra_so_nguyen_to(4); 
