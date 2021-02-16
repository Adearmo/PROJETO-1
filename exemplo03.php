<?php 
echo "<strong>tipo de dados Basicos</strong><br />";
$nome ="Adearmo";
echo $nome; 
echo"<br />";
$site ='www.adearmo.com.br';
echo $site;
echo"<br />";
$ano =1989;
echo $ano;
echo"<br />";
$salario =10000.99;
echo $salario;
echo"<br />";
$bloqueado =false;
echo $bloqueado;
echo"<br />";
/////////////////////////////
echo"<br /><br /><br /><strong> Tipo de Dados Compostos </strong><br />";
$frutas  = array("Abacaxi","laranja","manga");
echo $frutas[2] ;
echo"<br />";
var_dump($frutas);
echo"<br />";
$nascimento = new DateTime();
var_dump($nascimento);
echo"<br />";
////////////////////////////
echo"<br /><br /><br /><strong> Tipo de Dados especiais</strong> <br />";
$arquivo =fopen("exemplo03.php", 'r');
var_dump($arquivo);
echo"<br />";
$nulo =NULL;
var_dump($nulo);
echo"<br />";
$vazio='';
var_dump($vazio);
echo"<br />";


?>