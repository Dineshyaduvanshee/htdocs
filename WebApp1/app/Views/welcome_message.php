<?php
$x=1;
$y=30;
$c=$x+$y;
echo $c;

echo "<br>Welcome to Indicosmic pvt ltd.";
//this is the constant of the php
define('TITLES', '<br>Indicosmic');
$a=5;
$b=1;
if($a==2){
    echo "<br>Welcome to Indicosmic";
}else if($b==1){
    echo "<br>Welcome to yadutech pvt ltd.";
}else{
    echo "<br>Welcome to Quantique pvt ltd.";
}

echo TITLES;
$favcolor = "yellow";
switch($favcolor){
    case "red":
        echo "<br>your fav color is red";
        break;
    case "yellow":
        echo "<br>your fav color is yellow";
        break;
    case "pink":
        echo "<br>your fav color is pink";
        break;
    case "green":
        echo "<br>your fav color is green";
        break;
    default:
    echo "<br>This is defsult block color";

}


while($x<=1){
    echo "<br>Hey... this is Dineshyaduvanshee";
    $x++;
}
do{
    echo "<br>Hello Indicosmic devolopers $x","<br>";
    $x++;
}while($x<=15);

for($i=0;$i<=10;$i++){
    echo "<br>Give me some money";
}
$names=array('raj','ram','rakesh','ramesh','Dinesh','Dineshyaduvanshee','kumarVishwash');
foreach($names as $key=>$val){
    echo "<br>$val";
}
function wrrittenFunction(){
    echo "<br>This is my first function";
    $car1 = "Tiogo";
    $car2 = "Audi";
    $car3 = "suzuki";
    $car4 = "Toyeta";
    $car5 = "maruti";
    $cars = array("BMW", "TATA", "Mahindra");
    $age = array(
        "dinesh"=>23,
        "Ravi"=>34,
        "Pavan"=>45,
        "Devesh"=>67
    );
   
    echo "<pre>";
    print_r($cars);
    print_r($age);
    echo $age["dinesh"];

    $data = array(
        $age = array(
            "dinesh"=>23,
            "Ravi"=>34,
            "Pavan"=>45,
            "Devesh"=>67
        ),
        $cars = array("BMW", "TATA", "Mahindra"),

    );
    echo "<pre>";
    print_r($data);
    // array_merge()
    //array_Slice()
    // array_push(),
    // array_pop(),
    // array_reverse()
}
wrrittenFunction();


?>