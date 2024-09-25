<?php 
//1. Определение переменных и констант:
$strinG = "Строка";
$num = 21;
$bol = true;
define("name","MYsite");
echo $strinG;
echo $num;
echo $bol;
echo name;
//2. Преобразование типов:

$numString = "10";
$numType = (int)$numString;
echo gettype($numType);

//3. Использование операторов:
$a = 60;
$s = 10;
$a *= $s; 
$a %= $s; 
$a += $a; 
$a -= $s; 
$flavc= $a < $s; 
$b= ($a * $s) && ($a + 90);
echo $a;
echo $b;

//4. Суперглобальная переменная $_SERVER:

echo "Информация о сервере: ".$_SERVER['SERVER_NAME']. "<br>";
echo "IP-адрес клиента: ".$_SERVER['REMOTE_ADDR']. "<br>";

?>