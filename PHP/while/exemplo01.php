<?php
$codicao=true;
while ($codicao) {
	$numero=rand(1,10);
	if($numero===3){
		echo" TRES!!!!";
		$codicao=false;
	}
	echo $numero." ";
}

?>