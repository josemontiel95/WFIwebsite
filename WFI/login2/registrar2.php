<?php
require("conexion.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

if (isset($_POST['enviar']) && $_POST['first_name']!="" && $_POST['lastname']!="" && $_POST['user']!="" && $_POST['pass']!="" && $_POST['confpass']!="" && $_POST['correo']!=""){
    
    $name= $_POST['first_name'];
    $last= $_POST['lastname'];
	$user= $_POST['user'];
	$pass= $_POST['pass'];
	$cpass= $_POST['confpass'];
	$mail= $_POST['correo'];

    $sql2="SELECT * FROM usuariosadmin WHERE correo='$mail'";
    $sql3="SELECT * FROM usuariosadmin WHERE usuario='$user'";    

    $result2= mysqli_query($con,$sql2);
    $result3= mysqli_query($con,$sql3);

    $contar2= mysqli_num_rows($result2);
    $contar3= mysqli_num_rows($result3);
    

    if ($contar2>=1){

    	echo "Este correo ya existe";
    }
    else if($contar3>=1){
      
      echo "Este usuario ya esta en uso, Prueba con otro";
    }

    else{
	$sql="INSERT INTO usuariosadmin(id, nombres, apellidos, usuario, pass, confpass, correo) VALUES ('','$name','$last','$user','$pass','$cpass','$mail')";
	$result= mysqli_query($con,$sql);
	$_SESSION['iniciar_sesion']='hola';
	header("Location: inicio.php");
}

}//cierre if principal

else{

	echo "Llenar todos los campos";
}


?>



</body>
</html>
