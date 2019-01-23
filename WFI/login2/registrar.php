<?php
@$nameForm= $_POST['first_name'];
@$lastForm= $_POST['lastname'];
@$usForm= $_POST['user'];
@$paForm= $_POST['pass'];
@$cpaForm= $_POST['confpass'];
@$coForm= $_POST['correo'];
@$priForm= $_POST['priv'];

$sentencia = new PDO("mysql:dbname=wfi;host:localhost","root","");

$consulta = $sentencia->prepare("INSERT INTO UsuariosAdmin (nombres,apellidos,usuario,pass,confpass,correo,privilegio) VALUES (:nombreBase,:apellidoBase,:usuarioBase,:passBase,:confcontraBase,:correoBase,:privBase)");

$consulta->bindParam(":nombreBase",$nameForm);
$consulta->bindParam(":apellidoBase",$lastForm);
$consulta->bindParam(":usuarioBase",$usForm);
$consulta->bindParam(":passBase",$paForm);
$consulta->bindParam(":confcontraBase",$cpaForm);
$consulta->bindParam(":correoBase",$coForm);
$consulta->bindParam(":privBase",$priForm);

if($consulta->execute()){
	echo "Los datos se guardaron correctamente";
}
header("Location:http://localhost/wfijtable/Codes/s/index.html");


?>