<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time in PHP</title>
</head>
<body>
  <?php
  echo "The time is " .date("h:i:sa"). "<br>";
  // <!-- chuyển kiểu múi giwof bằng cách là : -->
  
  date_default_timezone_get("America/New York");
  echo "The time is ".date("h:i:sa");
  ?>
</body>
</html>