
<?php
$cars = array("Volvo", "BMW", "Toyota");
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach(array_slice($age, 0, 1) as $key => $value){
    echo $key. ":" .$value;
}

//$first_key = reset($age);
//echo $first_key;
//asort($age);

//rsort($cars);
//foreach ($age as $key => $value){
//    echo $key. ":". $value;
//    echo "<br>";
//}
//foreach ($cars as $vlue){
//    echo $vlue. "<br>";
//}
//$arrlength = count($cars);
//$rcars = sort($cars);
//foreach ($cars as $key => $value){
//    echo $key. ": " . $value . "<br>";
//}



//echo $arrlength;
//foreach ($cars as $value){
//    echo $value;
//    echo "<br>";
//}
//foreach ($age as $key => $abc){
//    echo $age. " + ". $abc;
//}



//$age = array("35"=>"peter", "Ben"=>"37", "Joe"=>"43");
//$str = "35";
//foreach($age as $x => $x_value) {
//    if($str[0] == $x){
//        echo "key ".$x." $x_value";
//    }
//    else{
//    echo "false";
//    }
//}


// $x = 5; /* global scope */
//
// function myTest() {
//     /* sử dụng biến x ở bên trong hàm sẽ sinh ra lỗi */
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();
//
// echo "<p>Variable x outside function is: $x</p>";
//$x = 5;
//$y = 10;
//
//function myTest() {
//    global $x, $y;
//    $y = $x + $y;
//}
//
//myTest();
//echo $y; /* outputs 15 */
//myTest();
//echo $y;
//myTest();
//echo $y;

//$x = 5;
//$y = 10;
//
//function myTest() {
//    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
//}
//
//myTest();
//echo $y; /* outputs 15 */
//myTest();
//echo $y; /* outputs 15 */
//myTest();
//echo $y; /* outputs 15 */

//function myTest() {
//    static $x = 0;
//    echo $x;
//    $x++;
//}
//myTest();
//myTest();
//myTest();

//echo "<h2>PHP is Fun!</h2>";
//echo "Hello world!<br>";
//echo "I'm about to learn PHP!<br>";
////sử dụng echo với nhiều tham số, các tham số cách nhau bởi dấu phẩy
//
//echo "This ", "string ", "was ", "made ", "with multiple parameters.";
//print "This ", "string ", "was ", "made ", "with multiple parameters."; lỗi không chạy được

//$txt1 = "Learn PHP";
//$txt2 = "W3Schools.com";
//$x = 5;
//$y = 4;
//
//echo "<h2>$txt1</h2>";
//echo "Study PHP at $txt2<br>";
//echo $x + $y;
//$txt1 = "Learn PHP";
//$txt2 = "W3Schools.com";
//$x = 5;
//$y = 4;
//
//print "<h2>$txt1</h2>";
//print "Study PHP at $txt2<br>";
//print $x + $y;

//$x = 5985;
//$x = true;
//var_dump($x);

//$cars = array("Volvo","BMW","Toyota");
//var_dump($cars);
//class Car {
//    function Car() {
//        $this->model = "VW";
//    }
//}
//
///* create an object */
//$herbie = new Car();
//
///* show object properties */
//echo $herbie->model;
//$x = "Hello world!";
//$x = null;
//var_dump($x);

?>
