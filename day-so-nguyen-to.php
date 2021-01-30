<?php

function isPrime($num)
{
    $flag = true;
    if ($num == 2) {
        return true;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $flag = false;
        }
    }
    return $flag;
}

//isPrime(4);

//var_dump(isPrime(4));
function displayPrime($n)
{
    $number =2;
    $count =0;
    while ($count<$n){
            if (isPrime($number)) {
                echo $number . ",";
                $count++;
            }
        $number++;
    }
}

displayPrime(100);