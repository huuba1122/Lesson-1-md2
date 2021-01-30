<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form action="" method="post">
    <fieldset>
        <legend>Calculator</legend>
        Fist operand: <input type="text" name="num1" placeholder="nhap so thu 1"><br>
        Operator:
        <select name="operator" id="">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select> <br>
        Fist operand: <input type="text" name="num2" placeholder="nhap so thu 1"><br>
        <button type="submit"> Calculate</button>
    </fieldset>
    <?php
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
//            var_dump($_POST);
            $num1 = $_POST['num1'];
            $operator = $_POST['operator'];
            $num2 = $_POST['num2'];
            if ($operator == '+'){
                echo "ket qua la : ".($num1+$num2);
            }elseif ($operator == "-"){
                echo "ket qua la : ".($num1-$num2);
            }elseif ($operator == '*'){
                echo "ket qua la : ".($num1*$num2);
            }else{
                if ($num2 !=0){
                    echo "ket qua la : ".($num1/$num2);
                }else{
                    echo " Nhap mau so khac khong ";
                }
            }
        }
    ?>
</form>
</body>
</html>
