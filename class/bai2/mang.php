<?php
// Khai báo mảng 1 chiều 
$arr = [
  1, 2, 3, 14, 'string', 12.4, 'Nguyễn trãi', 'Hà nội'
];
$arr[9] = 'maigam08092000@gmail.com';
print_r($arr); //in mảng trong PHP


// khai báo mảng 2 chiều trong PHP
$arr2 = [
  [1, 2, "nguyễn văn du", 'an', "HCM"],
  ['trần văn b', 'b09082000@gmail.com', 'HẢi dương']
];
echo "<br>" . $arr2[1][0]; // lấy giá trị là : trần văn b

// Mảng có khóa (key) và giá trị (value)
// mảng  được khai báo như sau : khóa của nó là số hoặc kí tự 
$arr3 = [
  'name' => "Mai Thị Gấm",
  'email' => 'gammtph10005@fpt.edu.vn',
  'address' => "Số 23, ngõ 71 đường Mỹ đình,quận Bắc từ Liêm"
];

echo "<br>" . $arr3['name'];
echo "<br>" . $arr3['email'];
echo "<br>" . $arr3['address'];

// foreach cho mảng 1 chiều 
echo "<br><br>";
echo "Foreach cho mảng 1 chiều nhé!";
$arr4 = [
  'name' => "Lương Văn Việt",
  'email' => 'viettph10005@fpt.edu.vn',
  'address' => "Số 2, ngõ 71 đường Mỹ đình,quận Bắc từ Liêm"
];
foreach ($arr4 as $item) {
  echo "<br>" . $item;
}

// Vòng lặp for truy cập mảng
echo "<h2> Vòng lặp for cho mảng </h2>";
for ($i = 0; $i < count($arr) - 1; $i++) {
  echo "Giá trị phần tử $arr[$i] <br>";
}

// truy cập mảng 2 chiều 
echo "<h3>Mảng 2 chiều</h3>";
$arr2 = [
  [1, 2, "nguyễn văn du", 'an', "HCM"],
  ['trần văn b', 'b09082000@gmail.com', 'HẢi dương']
];
foreach ($arr2 as $items) {
  foreach ($items as $item) {
    echo "Giá trị của phần tử : $item <br>";
  }
}


// truy cập mảng có khóa và giá trị của nó
$arr3 = [
  'name' => "Mai Thị Gấm",
  'email' => 'gammtph10005@fpt.edu.vn',
  'address' => "Số 23, ngõ 71 đường Mỹ đình,quận Bắc từ Liêm"
];
echo "<h2> Mảng có key và value </h2>";
foreach ($arr3 as $k => $v) {
  echo "$k: $v <br>";
}
// thay đổi múi giờ quy định trong PHP theo HỒ Chí Minh
date_default_timezone_set("Asia/Ho_Chi_Minh");//Khi ta muốn lưu giờ vào trong database thì ta phải  dùng câu lệnh này để thay đổi múi giờd
// Date time trong PHP
echo "<h3>Datetime trong PHP</h3>";
$date = new DateTime();

echo $date->format("Y-m-d H:i:s");
// trong đó :
// H: là giờ 
// i: là phút 
// s: là giây

// C2: thay đổi hàm time
$date2 = date("d-m-y H:i:s", time());
echo "<br> $date2";


