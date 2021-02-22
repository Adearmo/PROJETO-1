<?php
//session_id('2gp2iiikoe6ium5c1i9a41o65k');
require_once("config.php");
session_regenerate_id();
echo session_id();
echo "<br />";
var_dump($_SESSION);
?>