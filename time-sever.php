<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>current time</title>
</head>
<body>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<h1>current time : <?php  echo date('Y - M -d H:i:s');   ?></h1>
<h1>current time : <?php  echo date('l \t\h\e jS');   ?></h1>
<h1>current time : <?php  echo date('D M j G:i:s T Y');   ?></h1>
</body>
</html>