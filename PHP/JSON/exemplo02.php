<?php
$json='
[{"nome":"Adearmo","idade":"31"},{"nome":"Maria das Gra\u00e7as","idade":"71"}]';
$data=json_decode($json,true);
var_dump($data);

?>