<?php
/*
1.conditional
a.if
b.if-else
c.if-else-else
d.switch    

2.loop
a.for
b.while
c.do-while
d.foreach
*/
$x=10;
if($x>5){
    echo "x is greater than 5";
}else{
    echo "x is less than 5";
}
echo "<br>===========<br>";
$y=5;
if($y>0){
    echo "y is Positive Number";
}else if($y<0){
    echo "y is Nagetive Number";
}
else{
    echo "y is Zero";
}
echo "<br>===========<br>";

$day="Sunday";
switch($day){
    case "Sunday":
        echo "Motivational day";
        break;
    case "Saturday":
        echo "Weekend day ";
        break;
    case "Monday":
        echo "Study day";
        break;
    case "Tuesday":
        echo "Study day";
        break;
    case "thursday":
        echo "Study day";
        break;
    case "Wednesday":
        echo "Study day";
        break;
    case "Friday":
        echo "Weekend day and Movie Day";
        break;
    default:
        echo "Day not found";
        break;
}

echo "<br>===========<br>";

for($i=0; $i<10; $i++){
    if($i==5) break;
 
    echo $i;
    echo "<br>";
}
echo "<br>===========<br>";
$z=5;
while($z>0){
    echo $z . " <br>";
    $z--;
}
echo "<br>z = $z";
echo "<br>===========<br>";
do {
    echo "do while z = ".$z." <br>";
    $z++;
}while($z>10);

echo "<br>===========<br>";
// foreach(range(5,20) as $i){
//     echo $i;
//     echo "<br>";
// }
$arr = ["Raju","Vhai","is","a","good","boy"];
foreach($arr as $value){
    echo $value ."<br>";
}
echo "<br>===========<br>";
foreach($arr as $index => $value){
    echo $index . " ==> " . $value ."<br>";
}
?>