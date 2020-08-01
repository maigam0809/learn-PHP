<!-- . Viết hàm tính số Fibonaci thứ n (Fn) biết rằng (1đ):
F0 = 0, 
F1 = 1, 
F2 = 1, 
Fn = F(n-1) + F(n-2) -->
<?php
function tinh_tong($n) {
  $f0 = 0;
  $f1 = 1;
  $f2 = 1;
  $fn = 1;

  if ($n < 0) {
      return - 1;
  } else if ($n == 0 || $n == 1) {
      return $n;
  } else {
      for($i = 2; $i < $n; $i ++) {
          $f1 = $f2;
          $f2 = $fn;
          $fn = $f1+ $f2;
      }
  }
  return $fn;
}
echo '<br>'. tinh_tong(6);
echo '<br>'. tinh_tong(7);
?>
