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

if (isset($_POST['enviar']) && $_POST['first_name']!="" && $_POST['lastname']!="" && $_POST['user']!="" && $_POST['pass']!="" && $_POST['confpass']!="" && $_POST['correo']!="" && $_POST['privilegios']!=""){
    
    $name= $_POST['first_name'];
    $last= $_POST['lastname'];
	$user= $_POST['user'];
	$pass= $_POST['pass'];
	$cpass= $_POST['confpass'];
	$mail= $_POST['correo'];
    $pri= $_POST['privilegios'];

    $sql2="SELECT * FROM registrosuser WHERE correo='$mail'";
    $sql3="SELECT * FROM registrosuser WHERE usuario='$user'";    

    $result2= mysqli_query($con,$sql2);
    $result3= mysqli_query($con,$sql3);

    $contar2= mysqli_num_rows($result2);
    $contar3= mysqli_num_rows($result3);
    

    if ($contar2>=1){
        ?>
        <center>
            <h2>
        <?php

    	echo "Este correo ya existe";
    }
    else if($contar3>=1){
      
      echo "Este usuario ya esta en uso, Prueba con otro";
    }

    else{
	$sql="INSERT INTO registrosuser(id, nombres, apellidos, usuario, pass, confpass, correo, privilegios) VALUES ('','$name','$last','$user','$pass','$cpass','$mail','$pri')";
	$result= mysqli_query($con,$sql);
	$_SESSION['iniciar_sesion']='hola';
	echo "Registro de usuario exitoso";
}?>
<center>
    
<br>
<a href="principal.php">
    <input type="submit"  value="Regresar" style="color:white; background-color: blue; box-shadow: 5px 5px 5px #999" /> </a>
    
</center>

<?php
}//cierre if principal

else{

	echo "Llenar todos los campos";
}


?>



</body>
</html>
