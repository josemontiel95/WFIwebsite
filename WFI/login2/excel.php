<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=WFIRegistros.xls");


$conexion= mysql_connect("localhost","root","");
mysql_select_db("wfi",$conexion);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="6" bgcolor=""><center><strong>WFI DE MEXICO S DE RL DE CV </strong></center></td>
	</tr>
	<tr>
		<td><strong>ID</strong></td>
		<td><strong>NOMBRE</strong></td>
		<td><strong>PUESTO</strong></td>
		<td><strong>CORREO</strong></td>
		<td><strong>TEL.TRABAJO</strong></td>
		<td><strong>TEL.EMERGENCIA</strong></td>
		<td><strong>IMEI</strong></td>
		<td><strong>USUARIO</strong></td>
		<td><strong>PASSWORD</strong></td>
		<td><strong>CUENTA_HUAWUEI</strong></td>
		<td><strong>PASSWORD</strong></td>
		<td><strong>NSS</strong></td>
		<td><strong>CURP</strong></td>
		<td><strong>DOMICILIO</strong></td>
		<td><strong>ID</strong></td>
		<td><strong>CERTIFICADO MEDICO</strong></td>
		<td><strong>DC3 ALTURAS</strong></td>
		<td><strong>DC3 PRIMEROS AUXILIOS</strong></td>
		<td><strong>DC3 RIESGOS ELECTRICOS</strong></td>
		<td><strong>CREEDENCIALES WFI</strong></td>
		<td><strong>CREEDENCIALES HUAWUEI</strong></td>
		<td><strong>COMISIONAMIENTO</strong></td>
		<td><strong>INSTALACION</strong></td>
		<td><strong>PIM</strong></td>
	</tr>
<?PHP
		
$sql=mysql_query("SELECT id,Nombre,Puesto,Correo,TelTrabajo,TelEmergencia,imei,usuario,password,cuenta_huawuei,password2,nss,curp,domicilio,id2,certi_medico,cd3_alturas,cd3_pri_auxilios,cd3_ries_electricos,creedenciales_wfi, credenciales_huawuei,comisionamiento,instalacion,pim FROM registros");
while($res=mysql_fetch_array($sql)){		

	$codigo=$res["id"];
	$nombre=$res["Nombre"];
	$puesto=$res["Puesto"];
	$correo=$res["Correo"];
	$teltt=$res["TelTrabajo"];
	$tele=$res["TelEmergencia"];
	$imei=$res["imei"];
	$usuario=$res["usuario"];
	$pass=$res["password"];
	$ch=$res["cuenta_huawuei"];
	$pas=$res["password2"];
	$nss=$res["nss"];
	$curp=$res["curp"];
	$dom=$res["domicilio"];
	$id=$res["id2"];
	$cerm=$res["certi_medico"];
	$cd30=$res["cd3_alturas"];
	$cd32=$res["cd3_pri_auxilios"];
	$cd33=$res["cd3_ries_electricos"];
	$crewfi=$res["creedenciales_wfi"];
	$creh=$res["credenciales_huawuei"];
	$comisi=$res["comisionamiento"];
	$inst=$res["instalacion"];
	$pim=$res["pim"];				
?>  
 <tr>
	<td><?php echo $codigo; ?></td>
	<td><?php echo $nombre; ?></td>
	<td><?php echo $puesto; ?></td>
	<td><?php echo $correo; ?></td>
	<td><?php echo $teltt; ?></td>
	<td><?php echo $tele; ?></td>
	<td><?php echo $imei; ?></td>
	<td><?php echo $usuario; ?></td>
	<td><?php echo $pass; ?></td>
	<td><?php echo $ch; ?></td>
	<td><?php echo $pas; ?></td>
	<td><?php echo $nss; ?></td>
	<td><?php echo $curp; ?></td>
	<td><?php echo $dom; ?></td>
	<td><?php echo $id; ?></td>
	<td><?php echo $cerm; ?></td>
	<td><?php echo $cd30; ?></td>
	<td><?php echo $cd32; ?></td>
	<td><?php echo $cd33; ?></td>
	<td><?php echo $crewfi; ?></td>
	<td><?php echo $creh; ?></td>
	<td><?php echo $comisi; ?></td>
	<td><?php echo $inst; ?></td>
	<td><?php echo $pim; ?></td>
	                   
 </tr> 
  <?php
}
  ?>



</table>
</body>
</html>