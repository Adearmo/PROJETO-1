<?php
$frase ="Adearmo Company vai ser a maior empresa de software do mundo";
echo strtoupper($frase);
$frase=strtoupper($frase);
echo "<br>";
 $palavra="MAIOR";
 $q=strpos($frase,$palavra);
 var_dump($q);
echo "<br>";
$fraseCortada=substr($frase,0,$q);
var_dump($fraseCortada);
echo "<br>";
echo $fraseCortada;
$fraseCortada2=substr($frase,$q+strlen($palavra),strlen($frase));
echo "<br>";
echo $fraseCortada2;

?>