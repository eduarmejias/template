<?php
include ("conexion.php");
if(isset($_POST['name']) && !empty($_POST['name']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['pw']) && !empty($_POST['pw']) &&
	isset($_POST['conpw']) && !empty($_POST['conpw']) &&
    isset($_POST['adress']) && !empty($_POST['adress']) &&
	$_POST['pw'] == $_POST['conpw'])
{



mysql_query("INSERT INTO registros (name,lastname,email,phone,pass,province,city,postal_code,adress) values ('$_POST[name]','$_POST[lastname]','$_POST[email]','$_POST[phone]','$_POST[pw]','$_POST[province]','$_POST[city]','$_POST[postalcode]','$_POST[adress]')",$con);
echo "datos registrados";

} else { 
echo "verifica las claves ingresadas";
}

?>