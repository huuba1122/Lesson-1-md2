<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $amount = $_POST['amount'];
//    var_dump($_POST['amount']);
    $rate = $_POST["rate"];
    $years = $_POST["years"];
//    $result = $amount + ($amount*$rate);
    $result= $amount * ((1 +  $rate/100) ** $years);
    echo "<span style='color: darkorange; font-size: 32px'>Gia tri tuong lai sau $years nam la $result</span>";
}
