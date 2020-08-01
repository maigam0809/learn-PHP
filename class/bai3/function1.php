<?php
//1 : có từ khóa return 
function tinhTong($a, $b)
{
  echo "Tổng của hai số là : $a + $b = " . ($a + $b)."<br>";
}

function tinhTong2($a, $b)
{
  $a++;
  return $a + $b;
}
function kiemTra(){
  global $soa;
  $soa++;
  echo "<p>Bạn đã dùng biến toàn cục $soa </p>";
}

// sử dụng hàm
$soa =10;
$sob = 23.45;

tinhTong($soa,$sob);// nếu không có return 
echo "Tổng của hai số là $soa + $sob = " .tinhTong2($soa,$sob); // có giá trị trả về  
kiemTra();


// 2.Hàm tính tổng không biết trước 
// trim: lược bỏ khoảng trắng hoặc kí tự 
// ltrim : lược bỏ khoảng trắng ,kí tự bên tay phải ($t,',')
function tinh_tong_nhieu_so (){
  $arr = func_get_args();// hàm chức năng lấy ra các tham số được truyền vào trong hàm 
  // var_dump($arr);
  $sum =0;
  $s = '';
  foreach($arr as $a){
    $sum +=$a;

    $s = $s .$a. "+";
  }
  $s = rtrim($s,"+ ")." = ";
  return $s . $sum;
}
// tinh_tong_nhieu_so(1,2,3,4,5,6,7,8,9,12.1,"mai-gam","maigam08092000@gmail.com",true,false,22.4,65);
echo "Tổng của nhiều số là : ".tinh_tong_nhieu_so(12,32,3,4,12.4,13,22.4,53,65);


echo "<p> soa = $soa </p>";// giá trị tham chiếu chỉ có hiệu lực chỉ có ở trong hàm đó mà không liên quan và thay đôi các giá trị khác

?>