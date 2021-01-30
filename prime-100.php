<?php
function isPrime($num)
{
    $flag = true;
    if($num ==2){
        return true;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $flag = false;
        }
    }return $flag;
}
//isPrime(4);

//var_dump(isPrime(4));
function displayPrime(){
    for ($i= 2; $i <=100;$i++){
        if (isPrime($i)){
            echo $i.",";
        }
    }
}
displayPrime();