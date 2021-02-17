<?php 
//$nome =(INT)$_GET["a"];

//? SEPARA A URL DOS DADOS DE VARIAVEIS
//EXEMPLOS http://localhost/variaveis/exemplo04.php?a=123
//VAI MOSTRAR O VAR_DUMP string(3) "123"
//(INT)$_GET["VARIAVEL"]
//var_dump($nome);
//echo("<br />");
$ip = $_SERVER["REMOTE_ADDR"];
$ip2 = $_SERVER["SCRIPT_NAME"];
echo $ip;
echo("<br />");
echo $ip2;

?>