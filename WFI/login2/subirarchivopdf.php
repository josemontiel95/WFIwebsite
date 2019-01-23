
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon"  href="logo_wfi_3.ico">
  <title>Archivos WFI</title>
</head>
<body>
  <br>
  <center>
    <img src="logo_wfi_3.png">
  </center>
  <br>
<div style="width: 500px; margin: auto; border: 2px solid blue; padding: 30px;">
<?php
include 'config.php';
if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
      // creamos las variables para subir a la db
        $ruta = "upload/"; 
        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        $nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
        $upload= $ruta . $nombrefinal;  



        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                    
                    echo "<b>Upload exitoso!. Datos:</b><br>";  
                    echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>";  
                    echo "Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>";  
                    echo "Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>";  
                    echo "<br><hr><br>";  
                         


                   $nombre  = $_POST["nombre"]; 
                   $description  = $_POST["description"]; 


                   $query = "INSERT INTO archivos (name,description,ruta,tipo,size) 
    VALUES ('$nombre','$description','".$nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')"; 

       mysql_query($query) or die(mysql_error()); 
       echo "El archivo '".$nombre."' se ha subido con éxito <br>";       
        }  
    }  
 } 
?> 
<table>
  <tr>
    <td>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">  
    Seleccione archivo: <input name="fichero" type="file" size="150" maxlength="150">  
    <br><br> Nombre: <input name="nombre" type="text" size="55" maxlength="70"> 
    <br><br> Descripcion: <input name="description" type="text" size="50" maxlength="250"> 
    <br><br> 
  <input name="submit" type="submit" value="SUBIR ARCHIVO">   
</form> 
    </td>
  </tr>
  <tr>
    <td><div align="right"><a href="principal.php"><input type="submit" value="Regresar"></a></div></td>
  </tr>

</table>

 
</div>
<p>
  <center>
<form action="subirarchivopdf.php"  method="POST">
    <input type="text" name="buscar" id="buscar">
    <input type="submit"  value="buscar">
  </form>
</center>
<p></p>
<?php
  $buscar="";
  $conexion= mysqli_connect("localhost","root","","upload");
  @$buscar= $_POST['buscar'];
  $sql="SELECT * FROM archivos where name like '%".$buscar."%'";
  if ($buscar!=""){

    $busqueda= mysqli_query($conexion,$sql);
    echo "<center><caption>Resultados de busqueda</caption></center>";
  }
  ?>
  <?php

  while(@$muestra= mysqli_fetch_array($busqueda)){

  echo "<center><table border=1 ><tr>";
  echo "<td>".$muestra['id']."</td>";
  echo "<td>".$muestra['name']."</td>";
  echo "<td>".$muestra['description']."</td>";
  echo "<td>".$muestra['ruta']."</td>";
  echo "</table></center>";
  }
  ?>  



</p>
<br>
<?php
$conexion= mysqli_connect("localhost","root","","upload");
?>
<br>
<center>
  <center><b>Lista de documentos</b></center>
<table border="2">
 <tr>
   <td><b>Id</b></td>
   <td><b>Nombre del documento</b></td>
   <td><b>Descripcion del documento</b></td>
   <td><b>Ruta</b></td>
 </tr>
 <?php
$sql="SELECT * FROM archivos";
$consulta= mysqli_query($conexion,$sql);
while($mostrar= mysqli_fetch_array($consulta)){
 ?>
 <tr>
   <td><?php echo $mostrar['id']; ?></td>
   <td><?php echo $mostrar['name']; ?></td>
   <td><?php echo $mostrar['description']; ?></td>
   <td><?php echo $mostrar['ruta']; ?></td>

 </tr>
 <?php
}
 ?>
</table>
</center>




  

</body>
</html>

