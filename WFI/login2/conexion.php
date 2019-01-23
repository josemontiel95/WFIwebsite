<?php
$host="db765669182.hosting-data.io";
$user="dbo765669182";
$pass="Diciembre2018%";
$db="db765669182";

$con= mysqli_connect($host,$user,$pass);
if (mysqli_connect_errno()){
echo "Error de conexion";
}
mysqli_set_charset($con,"UTF8");
mysqli_select_db($con,$db);

?>