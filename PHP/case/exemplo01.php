<?php
$diadasemana=8;//date("w");
echo $diadasemana;
echo"<br>";
switch ($diadasemana) {
	case 0:
		echo "DOMIGO" ;
		break;
	
	case 1:
		echo "SEGUNDO" ;
		break;
	case 2:
		echo "TERÇA" ;
		break;
	case 3:
		echo "QUARTA" ;
		break;
	case 4:
		echo "QUINTA" ;
		break;
	case 5:
		echo "Sexta" ;
		break;
	case 6:
		echo "SABADO" ;
		break;
	default:
	 echo "Data INVALIDA";
}
?>