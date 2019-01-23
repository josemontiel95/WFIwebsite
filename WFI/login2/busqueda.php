<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  $buscar="";
  $conexion= mysqli_connect("localhost","root","","upload");
  $buscar= $_POST['buscar'];
  $sql="SELECT * FROM archivos where name like '%".$buscar."%'";
  if ($buscar!=""){

  	$busqueda= mysqli_query($conexion,$sql);
  }
  ?>
  <?php
  while($muestra= mysqli_fetch_array($busqueda)){
  echo "<tr>";
  echo "<td>".$muestra['id']."</td>";
  echo "<tr>".$muestra['name']."</td>";
  echo "<tr>".$muestra['description']."</td>";
  echo "<tr>".$muestra['ruta']."</td>";
  }



  ?>


<form action="busqueda.php" method="POST">
    <input type="text" name="buscar" >
    <input type="submit" value="buscar" >
  </form>
</body>
</html>


