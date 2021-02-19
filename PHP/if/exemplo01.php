<?php 
$qualASuaIdade=125;
$idadeCrianca=12;
$idadeMaior=18;
$idadeMelhor=65;
 if($qualASuaIdade<$idadeCrianca){

 	echo "Vc e UMa Criança";


 }
 else if($qualASuaIdade<$idadeMaior){

 	echo "Vc e adolecente";


 }
  else if($qualASuaIdade<$idadeMelhor){

 	echo "Vc e adulto";


 }
 
 else echo "vc e um Idoso";
 echo"<br>";
 echo ($qualASuaIdade<$idadeMaior)?" Menor de idade":"Maior de idade";

?>