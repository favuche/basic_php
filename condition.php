<?php
$date = date ('Ha, j Y');

function greet($time){
    echo "Good $time";
}

if($date < "12" ) {
    greet ("Morning");
} elseif($date < "16"){
    greet("Afternoon");
}elseif($date < "20"){
    greet("Evening");
}else{
    greet('Night');
}

echo"\n";
//echo $date;

function showColor($color){
    echo "Your Favourite Color is $color";
}

$randomIndex = rand(0, 4);

$arr = ['red',' ', 'green',' ','black',' ','blue',' ','pink'];

switch($arr[$randomIndex]){
    case "red":
        showColor("red");
        break;
    case "green":
        showColor("green");
        break;
    case "black":
        showColor("black");
        break;
    case "blue":
        showColor("blue");
        break;
    case "pink":
        showColor("pink");
        break;
    default:
    echo"You are Not certain";
}
echo"\n";
foreach($arr as $item) {
    echo $item;
}

foreach($arr as $key=> $value){
    echo "the key is: $key \n";
    echo "the color is: $value";
    echo "\n----------------\n";
}
?>