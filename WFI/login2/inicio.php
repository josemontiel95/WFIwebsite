<?php
session_start();
require("conexion.php");
if (($_SESSION['usuario']) !=''){
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2> Bienvenido 
		<?php
		 
            
			echo $_SESSION['usuario'];
		    


		?>


	</h2>
    <center> <a href="cerrar_sesion.php"> Cerrar sesion</a></center>
</body>
</html>

<?php
}else{
 echo "necesitas datos corrige";

}

?>