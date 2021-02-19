<?php
$nome="Adearmo";
function teste(){
	global $nome;
   echo $nome;
   echo "<br />";

}
function teste2(){
	$nome="SOUZA SANTOS";
  echo $nome." Agora no teste Dois";

}
teste();
teste2();

?>