<?php

$usuario= $_POST['correo'];
$pass= $_POST['pass'];

if (empty($usuario) || empty($pass)){
header("Location: index2.php");
exit();
}
mysql_connect("localhost","root","");
mysql_select_db("wfi");
$result= mysql_query("SELECT * FROM  registrosuser where correo= '".$usuario."'");
if ($row= mysql_fetch_array($result)){
if ($row["pass"]==$pass){

	session_start();
    require("conexion.php");
	$_SESSION["correo"]==$usuario;
	header("Location: principal2.php");
	
  }else{

	header("Location: index2.php");
}


}else{

	header("Location:index2.php");
}
?>

