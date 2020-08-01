<h1>Chào mừng bạn đến với php</h1>
<?php 
$a ="Lớp học PHp1";
$b = 12.3;
//Hiển thị dữ liệu 
print("Hiển thị dữ liệu print");

echo "<br> với echo hiển thị  nhiều dòng dữ liệu", $a, $b;

// Nối chuỗi trong PHP người ta dùng dấu . để nối chuỗi trong PHP
$result = $a . "" . $b;
echo "<br>$result";

// câu điều khiển rẽ nhánh trong php có 2 loại là if-else hoặc switch case 
?>
<?php
$x = 6;
if ($x == 10) {
echo "I have $x dollars";
}
elseif ($x > 7 && $x < 10) {
echo "I have $x children";
}
elseif ($x == 20) {
echo "I have";

