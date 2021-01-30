<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc so thanh chu</title>
</head>
<body>
<form method="post">
    <input type="text" name="numberInput">
    <button type="submit">Doc so</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $numberInput = $_POST["numberInput"];
        function oneNumber($one){
            switch ($one){
                case (1):
                    echo "One";
                    break;
                case (2):
                    echo "Two";
                    break;
                case (3):
                    echo "Three";
                    break;
                case (4):
                    echo "Four";
                    break;
                case (5):
                    echo "Five";
                    break;
                case (6):
                    echo "Six";
                    break;
                case (7):
                    echo "Seven";
                    break;
                case (8):
                    echo "Eight";
                    break;
                case (9):
                    echo "Nine";
                    break;
            }
        }
        function twoNumber($two){
            switch ($two){
                case (10):
                    echo "Ten";
                    break;
                case (11):
                    echo "Eleven";
                    break;
                case (12):
                    echo "Twelve";
                    break;
                case (13):
                    echo "Thirteen";
                    break;
                case (14):
                    echo "Fourteen";
                    break;
                case (15):
                    echo "Fifteen";
                    break;
                case (16):
                    echo "Sixteen";
                    break;
                case (17):
                    echo "Seventeen";
                    break;
                case (18):
                    echo "Eighteen";
                    break;
                case (19):
                    echo "Nineteen";
                    break;
            }
        }
        function hundred($hundred){
            oneNumber($hundred);
            echo "hundred";
        }
        function number($three){
            switch ($three){
                case (2):
                    echo "Twenty";
                    break;
                case (3):
                    echo "Thirty";
                    break;
                case (4):
                    echo "Forty";
                    break;
                case (5):
                    echo "Fifty";
                    break;
                case (6):
                    echo "Sixty";
                    break;
                case (7):
                    echo "Seventy";
                    break;
                case (8):
                    echo "Eighty";
                    break;
                case (9):
                    echo "Ninety";
                    break;
            }
        }
    }
    if ($numberInput ==0){
        echo "zero";
    }elseif($numberInput>0 && $numberInput<10){
        oneNumber($numberInput);
    }elseif ($numberInput>=10 && $numberInput<20){
        twoNumber($numberInput);
    }elseif ($numberInput>=20 && $numberInput<100){
        number($numberInput[0]);
        oneNumber($numberInput[1]);
    }elseif ($numberInput>=100 && $numberInput<1000){
        $hundred= $numberInput[0];
        $ten= $numberInput[1];
        $one= $numberInput[2];
        if ($numberInput ==100){
            hundred($hundred);
        }elseif ($ten==1){
            hundred($hundred);
            echo " and ";
            twoNumber($ten.$one);
        }else{
            hundred($hundred);
            echo " and ";
            number($ten);
            oneNumber($one);
        }
    }
?>
</body>
</html>
