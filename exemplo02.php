<?php

 $anoNascimento = 1989;
 //numero so e aceito no meio ou no fim do nome da variavel o unico caracteres aceito e _
 
 $sobreNome="Souza Santos";
 $nome1='Adearmo';
  echo "<br />";//pula linha
  echo $nome1;
  //unset($nome1); // limpando a variavel
  echo "<br />";
  if (isset($nome1)){ //descobrir se a variavel existe
  		echo $nome1;
  }
  
  echo "<br />";
  echo "<br />";
  $nomeCompleto =$nome1 ." ". $sobreNome;
  echo $nomeCompleto;
  echo "<br /><strong>Tipo de dados basicos </strong><br /> INT <br /> STRING <br /> FLOAT <br />Boleano<br />";
  echo "<br /><strong>Tipo de dados compostos</strong> <br /> Array <br />Objeto <br />";
  echo "<br /><strong>Tipo de dados Especiais</strong> <br /> resource<br />NULL <br />";
?>

