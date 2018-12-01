<?php
$name=array(
    "Akop",
    "Elisey",
    "Vitalik",
    "Misha",
    "Dmitriy",
    "Vlad",
    "Roma",
    "Leha",
    "Luda",
    "Nikita",
);
$surname=array(
    "Azabyan",
    "Vrublevski",
    "Kurzenkov",
    "Lobach",
    "Uzefchik",
    "Krepski",
    "Davidov",
    "Romanchik",
    "Dmitruk",
    "Ysckovec",
);
$name_surname=array(
    "Azabyan"=>"Akop",
    "Vrublevski"=>"Elisey",
    "Kurzenkov"=>"Vitalik",
    "Lobach"=>"Misha",
    "Uzefchik"=>"Dmitriy",
    "Krepski"=>"Vlad",
    "Davidov"=>"Roma",
    "Romanchik"=>"Leha",
    "Dmitruk"=>"Luda",
    "Ysckovec"=>"Nikita",

);

echo "------------------first option-------------------- <br>";
print_r($name);
echo "<br>";
print_r($surname);
echo "<br>-------------------second option-----------------";
echo "<br>-------------------names-----------------<br>";

foreach ($name as $item)
{
    echo "$item <br>";
}
echo "----------surname----------- <br>";
foreach ($surname as $item) {
    echo "$item <br>";
}

echo "-------------name and surname---------- <br>";
foreach ($name_surname as $surnames=>$names)
{
    echo "$surnames $names <br>";
}
echo "------------------order by name---------------- <br>";
asort($name);
foreach ($name as $item)
{
    echo "$item <br>";
}

echo "-----------next option---------- <br>";
$combine=array_combine($surname,$name);
print_r($combine);

echo "<br>------------merge arrays----------<br>";
$merge=array_merge($name,$surname);
foreach ($merge as $item) {
    echo "$item <br>";
}
$dick=array(
    "Azabyan"=>25,
    "Vrublevski"=>19,
    "Kurzenkov"=>16,
    "Lobach"=>23,
    "Uzefchik"=>19,
    "Krepsiy"=>23,
    "Davidov"=>16,
    "Romanchik"=>41,
    "Dmitruk"=>42,
    "Ysckovec"=>23,

);
$v="v";
foreach ($dick as $key=>$value) {
    $s=mb_substr_count($key,$v);
    echo "$s <br>";

}
