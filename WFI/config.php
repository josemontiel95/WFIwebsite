<?php
$host = "db765669182.hosting-data.io";
$dbuser = "dbo765669182";
$dbpwd = "Diciembre2018%";
$db = "db765669182";

$connect = mysql_connect ($host, $dbuser, $dbpwd);
	if(!$connect)
		echo ("No se ha conectado a la base de datos");
	else
		$select = mysql_select_db ($db);
?>