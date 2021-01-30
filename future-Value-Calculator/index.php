<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>future value calculator</title>
</head>
<body>
<form action="calculator.php" method="post">
    <fieldset>
        <legend>future value calculator</legend>
        Tien dau tu
        <br><input type="text" name="amount" > <br>
        Lai suat nam
        <br><input type="text" name="rate"> <br>
        so nam dau tu
        <br><input type="text" name="years"><br>
        <button type="submit">Calculator</button>
    </fieldset>

</form>
<?php
//if ($_SERVER["REQUEST_METHOD"]== "POST"){
//    $amount = $_POST['amount'];
////    var_dump($_POST['amount']);
//    $rate = $_POST["rate"];
//    $years = $_POST["years"];
////    $result = $amount + ($amount*$rate);
//    $result= $amount * ((1 +  $rate/100) ** $years);
//    echo "Gia tri tuong lai sau ".$years." nam la ".$result;
//}
//?>
</body>
</html>
