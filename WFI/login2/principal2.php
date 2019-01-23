<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon"  href="logo_wfi_3.ico">
	<title>Usuario</title>
</head>
<body>
<center><img src=logo_wfi_3.png>
<p>
	<a href="http://localhost/wfijtable/Codes/formulario/index2.php"><input type="submit" value="Cerrar sesión" class="boton2"></a>
</p>
 <style type="text/css">
        .boton{

            font-size:13px;
        font-family:arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        background-image: ("Ncrow-Mega-Pack-1-Excel.ico");
        border:100px;
        width:100px;
        height:29px;
        }
        .boton2{
        font-size:13px;
        font-family:arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        background-image: ("Ncrow-Mega-Pack-1-Excel.ico");
        border:100px;
        width:130px;
        height:29px;
        }
        .boton3{
            font-size:13px;
        font-family:arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        background-image: ("Ncrow-Mega-Pack-1-Excel.ico");
        border:100px;
        width:90px;
        height:22px;
        }


    </style>
</center>
<?php
$conexion= mysqli_connect("localhost","root","","wfi");
?>
<br>
<center>
  <center><b><h3>Sistema de consulta</b></h3></center><p>
  <form action="principal2.php"  method="POST">
    <input type="text" name="buscar" id="buscar" size="30">
    <input type="submit"  value="Buscar" class="boton3">
  </form>
</center>
<p></p>
<?php
  $buscar="";
  $conexion= mysqli_connect("localhost","root","","wfi");
  @$buscar= $_POST['buscar'];
  $sql="SELECT * FROM registros where Nombre like '%".$buscar."%'";
  if ($buscar!=""){

    $busqueda= mysqli_query($conexion,$sql);
    echo "<center><caption><b>Resultados de busqueda</caption></center></b>";
  }
  ?>
  
   
  <?php

  while(@$muestra= mysqli_fetch_array($busqueda)){
?>


<?php
  echo "<center><table border=1 bordercolor=#D3D3D3><tr>";
  echo "<td>".$muestra['id']."</td>";
  echo "<td>".$muestra['Nombre']."</td>";
  echo "<td>".$muestra['Puesto']."</td>";
  echo "<td>".$muestra['Correo']."</td>";
  echo "<td>".$muestra['TelTrabajo']."</td>";
  echo "<td>".$muestra['TelEmergencia']."</td>";
  echo "<td>".$muestra['imei']."</td>";
  echo "<td>".$muestra['usuario']."</td>";
  echo "<td>".$muestra['password']."</td>";
  echo "<td>".$muestra['cuenta_huawuei']."</td>";
  echo "<td>".$muestra['password2']."</td>";
  echo "<td>".$muestra['nss']."</td>";
  echo "<td>".$muestra['curp']."</td>";
  echo "<td>".$muestra['domicilio']."</td>";
  echo "<td>".$muestra['id2']."</td>";
  echo "<td>".$muestra['certi_medico']."</td>";
  echo "<td>".$muestra['cd3_alturas']."</td>";
  echo "<td>".$muestra['cd3_pri_auxilios']."</td>";
  echo "<td>".$muestra['cd3_ries_electricos']."</td>";
  echo "<td>".$muestra['creedenciales_wfi']."</td>";
  echo "<td>".$muestra['credenciales_huawuei']."</td>";
  echo "<td>".$muestra['comisionamiento']."</td>";
  echo "<td>".$muestra['instalacion']."</td>";
  echo "<td>".$muestra['pim']."</td>";
  

  echo "</table></center>";
  }
  ?>  


  </p>
<table border="1" bordercolor="#D3D3D3">
 <tr>
   <td><b>Id</b></td>
   <td><b>Nombre</b></td>
   <td><b>Puesto</b></td>
   <td><b>Correo</b></td>
   <td><b>TelTrabajo</b></td>
   <td><b>TelEmergencia</b></td>
   <td><b>IMEI</b></td>
   <td><b>Usuario</b></td>
   <td><b>Password</b></td>
   <td><b>Cuenta_huauwei</b></td>
   <td><b>Password</b></td>
   <td><b>NSS</b></td>
   <td><b>CURP</b></td>
   <td><b>Domicilio</b></td>
   <td><b>Id</b></td>
   <td><b>Certificado_Medi</b></td>
   <td><b>CD3_ALTURAS</b></td>
   <td><b>CD3_PRIMEROS_AUXILIOS</b></td>
   <td><b>CD3_RIESGOS_ELECTRICOS</b></td>
   <td><b>CREEDENCIALES_WFI</b></td>
   <td><b>CREEDENCIALES_HUAUWEI</b></td>
   <td><b>COMISIONAMIENTO</b></td>
   <td><b>INSTALACION</b></td>
   <td><b>PIM</b></td>
 </tr>
 <?php
$sql="SELECT * FROM registros";
$consulta= mysqli_query($conexion,$sql);
while($mostrar= mysqli_fetch_array($consulta)){
 ?>
 <tr>
   <td><?php echo $mostrar['id']; ?></td>
   <td><?php echo $mostrar['Nombre']; ?></td>
   <td><?php echo $mostrar['Puesto']; ?></td>
   <td><?php echo $mostrar['Correo']; ?></td>
   <td><?php echo $mostrar['TelTrabajo']; ?></td>
   <td><?php echo $mostrar['TelEmergencia']; ?></td>
   <td><?php echo $mostrar['imei']; ?></td>
   <td><?php echo $mostrar['usuario']; ?></td>
   <td><?php echo $mostrar['password']; ?></td>
   <td><?php echo $mostrar['cuenta_huawuei']; ?></td>
   <td><?php echo $mostrar['password2']; ?></td>
   <td><?php echo $mostrar['nss']; ?></td>
   <td><?php echo $mostrar['curp']; ?></td>
   <td><?php echo $mostrar['domicilio']; ?></td>
   <td><?php echo $mostrar['id2']; ?></td>
   <td><?php echo $mostrar['certi_medico']; ?></td>
   <td><?php echo $mostrar['cd3_alturas']; ?></td>
   <td><?php echo $mostrar['cd3_pri_auxilios']; ?></td>
   <td><?php echo $mostrar['cd3_ries_electricos']; ?></td>
   <td><?php echo $mostrar['creedenciales_wfi']; ?></td>
   <td><?php echo $mostrar['credenciales_huawuei']; ?></td>
   <td><?php echo $mostrar['comisionamiento']; ?></td>
   <td><?php echo $mostrar['instalacion']; ?></td>
   <td><?php echo $mostrar['pim']; ?></td>

 </tr>
 <?php
}
 ?>
</table>
</center>



</body>
</html>