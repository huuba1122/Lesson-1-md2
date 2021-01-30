<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $description = $_POST['description'];
    $price = $_POST['price'];
    $rate = $_POST["percent"];
//    var_dump($_POST);
    $discountAmount = $price*$rate*0.01;
    $lastPrice = $price - $discountAmount;
    echo "San Pham: ".$description. "<br>" ;
    echo "Luong chiet khau: ". $discountAmount . "<br>";
    echo "<span style='color: blue'>Gia sau khi duoc chiet khau $lastPrice</span>";
}

