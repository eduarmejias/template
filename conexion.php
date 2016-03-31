<?php

$host = "localhost";
$user = "root";
$pw ="root";
$db = "restaurant";

 $con=mysql_connect($host,$user,$pw) or die ("problemas al conectar");
 mysql_select_db($db,$con) or die ("problemas al conectar db");

?>