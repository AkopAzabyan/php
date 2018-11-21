<?php
define("str","stroka",true);
define("number",25,true);
$bool =true;
$int=5;
$double=5.5;
$string="string";
class object
{
    function fun()
    {
        echo "object";
    }
}
$object=new object;

echo " ------------variables-------------- " . "<br>";
echo gettype($bool)."<br>";
echo gettype($string)."<br>";
echo gettype($int)."<br>";
echo gettype($double)."<br>";
echo gettype($object)."<br>";
echo " ---------sum and concat--------" ."<br>";
echo $int+$double ."<br>" ;
echo $string . $int . "<br>";
echo $int . $double ."<br>";
echo $bool + $int ."<br>";
echo $bool . $int ."<br>";
echo $string . $bool . $double . "<br>";
echo $bool + $double ."<br>";
echo str . "<br>";
echo number . "<br>";

function getResultInt($var1,$var2)
{
  return $var1+$var2;
}
echo getResultInt(25,25) . "<br>";

function getResultString($var1,$var2)
{
    return $var1 ."-". $var2;
}
echo getResultString("one","two") . "<br>";