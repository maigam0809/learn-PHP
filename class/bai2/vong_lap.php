<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vòng lặp while - vòng lặp không xác định</title>
</head>

<body>
  <?php
  // vòng lặp while
  $dem = 0;
  while ($dem < 5) {
    $dem++;
    echo "Vòng lặp while thứ $dem <br>";
  }

  // vòng lặp do while 
  do{
    echo "Vòng lặp do.... while thứ $dem <br>";
    $dem--;

  }while($dem >0 );

  // vòng lặp for
  for($i = 1; $i<= 5; $i++){
    echo "Vòng lặp for thứ $i <br>";
  }

  // vòng lặp foreach
  ?>
</body>

</html>