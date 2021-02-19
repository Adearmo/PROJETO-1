<form>
	<input type="text" name="NOME">
	<input type="date" name="NASCIMENTO">
	<input type="submit" name="OK">
	

</form>
<?php
if(isset($_GET)){
	foreach ($_GET as $key => $value) {
		echo "Nome do campo: ".$key."<br>";
		echo " VALor dp campo: ".$value ."<br>";
		echo "<hr>";
}
}
?>