<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> decode JCode trong PHP </title>
</head>

<body>
  <?php
  function ham_xu_ly($value, $key)
  {
    echo "$key : $value" . "<br>";
  }
  $a = '{"Trường": "Cao đẳng thực hành FPT POLYTECHNIC",  
  	"Khoa": "CNTT",  
  	"Ngành":  
  	{   
  	  "Ngành 1": "Thiết kế website",
  	  "Ngành 2": "Lập trình Moblie"
  	}  
      }';

  $j1 = json_decode($a, true);
  array_walk_recursive($j1, "ham_xu_ly");
  ?>
</body>

</html>