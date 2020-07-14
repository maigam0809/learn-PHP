<?php
if (isset($_POST['btnGPT'])) {

  $ca_ri = $_POST['ca_ri'];
  $rau_xao = $_POST['rau_xao'];
  $ca_kho = $_POST['ca_kho'];
  $com = $_POST['com'];

  if ($ca_ri <= 0) {
    $kq1 = 0;
  } elseif ($rau_xao <= 0) {
    $kq2 = 0;
  } elseif ($ca_kho <= 0) {
    $kq2 = 0;
  } elseif ($com <= 0) {
    $kq4 = 0;
  }
  $tong = $ca_ri * 15000 + $rau_xao * 25000 + $ca_kho * 35000 +$com * 10000;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    form{
      width: 700px;
      margin: 0 auto;
      background-color: orangered;
      padding: 50px;
      color: white;
    }
    h2 {
      text-align: center;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%; 
      /* margin: 200px; */
    }

    td,
    th {
      text-align: left;
      padding: 8px;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    <h2>Bảng tính tiền</h2>

    <table>
      <tr>
        <th>Tên món</th>
        <th>Đơn giá </th>
        <th>Số lượng</th>
      </tr>
      <tr>
        <td>Cà ri</td>
        <td>15000</td>
        <td><input type="number" name="ca_ri" value="<?= (isset($ca_ri) ? $ca_ri : 0) ?>" id=""></td>
      </tr>
      <tr>
        <td>Rau xào</td>
        <td>25000</td>
        <td><input type="number" name="rau_xao" value="<?= (isset($rau_xao) ? $rau_xao : 0) ?>" id=""></td>
      </tr>
      <tr>
        <td>Cá kho</td>
        <td>35000</td>
        <td><input type="number" name="ca_kho" value="<?= (isset($ca_kho) ? $ca_kho : 0) ?>" id=""></td>
      </tr>
      <tr>
        <td>Cơm</td>
        <td>10000</td>
        <td><input type="number" name="com" value="<?= (isset($com) ? $com : 0) ?>" id=""></td>
      </tr>
      <tr>
        <td colspan="2">Tổng tiền</td>
        <td><input type="text" name="" value="<?= (isset($tong) ? $tong : 0) ?>" id=""></td>
      </tr>
    </table>
    <button type="submit" name="btnGPT" >Tính tiền</button>
  </form>
</body>

</html>