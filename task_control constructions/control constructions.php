<?php
echo "task with if <br>";
$a=15;
$b=5;
if($a>$b)
{
    echo "a=$a <br>","b=$b <br>";
    echo "a > b <br>";
}
echo "task with else <br>";
if($a<$b)
{
    echo "a > b";
}
else{
    echo "a <  b <br>";
}
echo "task with else if <br>";
if ($a == $b) {
    echo "a = b";
} elseif ($a > $b) {
    echo "a > b <br>";
} else {
    echo "a < b ";
}
echo "task with alternative <br>";
$s=rand(1,3);
echo $s;
echo "<br>";
if ($s == 1):
    echo "a = 1";
elseif ($s == 2):
    echo "a = 2";
else:
    echo "a = 3";
endif;

echo "<br>";

echo "task with while <br>";
$w=0;
while($w<=15)
{
    echo $w++." ";
}
echo "<br>task with do while <br>";
$i = 0;
do {
    echo  $i++." ";
} while ($i < 10);
echo "<br>task with for<br>";
for ($q=0;$q<=25;$q++)
{
    echo " $q ";
}
echo "<br>task with foreach<br>";
$array=array(1,2,3,4,5);
foreach ($array as $item) {
    echo "$item ";
}
echo "<br>task with break<br>";
$arr=array(1,2,3,4,5);
foreach ($arr as $val) {
    if ($val == 3) {
        break;
    }
    echo "$val <br>";
}
echo "<br>task with continue<br>";
foreach ($arr as  $value) {
    if ($value % 2) {
        continue;
    }
   echo "$value ";
}
echo "<br>task with switch<br>";
$n=rand(0,5);
switch ($n) {
    default:
        echo "default ";
        break;
    case 0:
        echo "n = 0";
        break;
    case 1:
        echo "n = 1";
        break;
    case 2:
        echo "n = 2";
        break;
}
echo "<br>task with declare<br>";
echo "I don't understand what it is and did not";
echo "<br>task with return<br>";
function fun($fun)
{
    return $fun*3/5;
}
echo fun(15);
echo "<br>task with return and include<br>";
//require ('variables.php');
//include ('variables.php');
echo "mission completed";
echo "<br>task with return-once and include-once<br>";
//require_once ('variables.php');
//include_once ('variables.php');
echo "mission completed";
echo "<br>task with goto<br>";
goto go;

echo "something";
go:
echo "something else";
