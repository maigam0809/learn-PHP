 <!-- Có 4 cách để sử dụng các file php khác:
  - include : khi có lỗi nó vẫn chạy cho ra kết quả
  -include_once: 
  - require :khi có lỗi chương trình phải dừng hắn
  - require_once :
 -->
 <?php
  require_once "function2.php";
  if (isset($_POST['btnGiai'])) {
    $son = $_POST['son'];
    if (is_numeric($son)) {
      if (kiem_tra_so_nguyen_to($son)) {
        $kq = "Số $son là số nguyên tố.";
      } else {
        $kq = "Số $son không là số nguyên tố.";
      }
    } else {
      $kq = "Bạn cần nhập số để chương trình hoạt động.";
    }
  }
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kiểm tra số nguyên tố</title>
 </head>

 <body>

   <form action="" method="post">
     <input type="number" name="son" value="<?= isset($son) ? $son : 0 ?>" id="">
     <br>
     <button type="submit" name="btnGiai">Kiểm tra</button>
   </form>
   <?php
    if (isset($kq)) {
      echo $kq;
    }
    ?>
 </body>

 </html>