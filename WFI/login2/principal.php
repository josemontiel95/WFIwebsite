<?php
require("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon"  href="logo_wfi_3.ico">
	<link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	<title>Inicio WFI</title>
</head>
<body>


 <?php
session_start();
require("conexion.php");
 ?>
 <center>
 	<style type="text/css">
 		
   .boton4{
        font-size:13px;
        font-family:arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        background-image: ("Ncrow-Mega-Pack-1-Excel.ico");
        border:100px;
        width:130px;
        height:10px;

 	</style>
 <form action="cerrar_sesion.php" method="POST">
 	<input type="submit" value="Cerrar Sesión" class="boton4">
</form>
</center>
    <p><center><img src=logo_wfi_3.png></center>
    
	<br>
	<table>
		<tr>
			<td><center>
<form action="principal.php"  method="POST">
	<label>Buscar Cuenta Huawei
    <input type="text" name="buscarcuentah" id="buscarcuentah" size="30"></label>
    <input type="submit"  value="Buscar" class="boton4">
  </form>

</center></td>
			<td style="color:transparent;"><td>
            <a href="excelhuawuei.php"><input type="submit" class="boton4" id="generarexcel" name="" value="Generar excel Huawei"></input></a>
			</td></td>
			<td><div class="filtering" align="center">
          <label for = "buscar">Busqueda</label>
          <input type ="text" name="buscar" id="buscar">
      </div></td>

		</tr>
	</table>
	
          <p>
          	
<?php
  $buscar="";
  $conexion= mysqli_connect("localhost","root","","wfi");
  @$buscar= $_POST['buscarcuentah'];
  $sql="SELECT * FROM registros where cuenta_huawuei like '%".$buscar."%'";
  if ($buscar!=""){

    $busqueda= mysqli_query($conexion,$sql);
    echo "<center><caption><br>Resultados de busqueda</caption></center>";
  }else if($buscar=="N/A" || $buscar=="n/a"){
  $busqueda= mysqli_query($conexion,$sql);
    echo "<center><caption><br>Resultados de busqueda</caption></center>";
  }
  ?>
  
   
  <?php

  while(@$muestra= mysqli_fetch_array($busqueda)){
?>


<?php
  echo "<center><table border=1 bordercolor= #D3D3D3 ><tr>";
  echo "<td>ID</td><td>Nombre</td><td>Puesto</td><td>Correo</td><td>Tel.Trabajo</td><td>Tel.Emergencia</td><td>IMEI</td><td>Usuario</td><td>Password</td><td>HUAWEI_ACCOUNT</td><td>Password</td><td>NSS</td><td>CURP</td><td>Domicilio</td><td>ID</td><td>Certificado_Medico</td><td>CD3_ALTURAS</td><td>CD3_pri_auxilios</td><td>CD3_ries_electricos</td><td>Creedenciales_WFI</td><td>Creedenciales_HUAWUEI</td><td>Comisionamiento</td><td>Instalacion</td><td>PIM</td></tr><tr><td>".$muestra['id']."</td><td>".$muestra['Nombre']."</td><td>".$muestra['Puesto']."</td><td>".$muestra['Correo']."</td><td>".$muestra['TelTrabajo']."</td><td>".$muestra['TelEmergencia']."</td><td>".$muestra['imei']."</td><td>".$muestra['usuario']."</td><td>".$muestra['password']."</td><td>".$muestra['cuenta_huawuei']."</td><td>".$muestra['password2']."</td><td>".$muestra['nss']."</td><td>".$muestra['curp']."</td><td>".$muestra['domicilio']."</td><td>".$muestra['id2']."</td><td>".$muestra['certi_medico']."</td><td>".$muestra['cd3_alturas']."</td><td>".$muestra['cd3_pri_auxilios']."</td><td>".$muestra['cd3_ries_electricos']."</td><td>".$muestra['creedenciales_wfi']."</td><td>".$muestra['credenciales_huawuei']."</td><td>".$muestra['comisionamiento']."</td><td>".$muestra['instalacion']."</td><td>".$muestra['pim']."</td></tr>";
  echo "</table></center>";
  }
  ?>  

          </p>
     


	<div id="PeopleTableContainer" style="width: 3000px; "> </div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'WFI de México ',
                paging: true,
				pageSize: 500,
				sorting: true,
				defaultSorting: 'nombre ASC',
				toolbar: {
              items: [
              {
                  icon: 'pdf.png',
                  text: 'Exportar a pdf',
                  click: function () {
                    window.open('html2pdf/pdf/pdf2.php');
                  }
              }]
          },
                toobarsearch: true,
                selecting: true, //Enable selecting
            multiselect: true, //Allow multiple selecting
            selectingCheckboxes: true,

				actions: {
					listAction:   'PersonActions.php?action=list',
					createAction: 'PersonActions.php?action=create',
					updateAction: 'PersonActions.php?action=update',
					deleteAction: 'PersonActions.php?action=delete'
				},
				fields: {

					id: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					
					Nombre: {
						title: 'Nombre',
						width: '1.5%',
						height: '100%'
					},
					Puesto: {
						title: 'Puesto',
						width: '0.8%'
					},
                    Correo: {
						title: 'Correo',
						width: '1.5%'
					},
					TelTrabajo: {
						title: 'Tel.Trabajo',
						width: '10%'
					},
					TelEmergencia: {
						title: 'Tel.Emergencia',
						width: '10%'
					},
					imei: {
						title: 'IMEI',
						width: '20%'
					},
					usuario: {
						title: 'Usuario',
						width: '20%'
					},
					password: {
						title: 'Password',
						width: '20%'
					},
					Puesto: {
						title: 'Puesto',
						width: '20%'
					},
					cuenta_huawuei: {
						title: 'HUAWEI_ACCOUNT',
						width: '20%'
					},
					password2: {
						title: 'Password',
						width: '20%'
					},
					nss: {
						title: 'NSS',
						width: '20%'
					},
					curp: {
						title: 'CURP',
						width: '20%'
					},
					domicilio: {
						title: 'Domicilio',
						width: '20%'
					},
					id2: {
						title: 'ID',
						width: '20%'
					},
					certi_medico: {
						title: 'Certificado_Medico',
						width: '20%'
					},
					cd3_alturas: {
						title: 'CD3_ALTURAS',
						width: '20%'
					},
					cd3_pri_auxilios: {
						title: 'DC3_PRIMEROS_AUXILIOS',
						width: '20%'
					},
					cd3_ries_electricos: {
						title: 'DC3_RIESGOS_ELECTRICOS',
						width: '20%'
					},
					creedenciales_wfi: {
						title: 'Creedenciales_WFI',
						width: '20%'
					},
					credenciales_huawuei: {
						title: 'Creedenciales_HUAWUEI',
						width: '20%'
					},
					comisionamiento: {
						title: 'Comisionamiento',
						width: '20%'
					},
					instalacion: {
						title: 'Instalacion',
						width: '20%'
					},
					pim: {
						title: 'PIM',
						width: '20%'
					}
				}
			});
$('#buscar').keyup(function(e) {
                e.preventDefault();
                $('#PeopleTableContainer').jtable('load', {
                variable: $('#buscar').val()
                });
            });
			//Load person list from server
		$('#PeopleTableContainer').jtable('load');
		});
	</script>

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
        width:150px;
        height:29px;
		}
		.boton4{
			font-size:13px;
        font-family:arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        background-image: ("Ncrow-Mega-Pack-1-Excel.ico");
        border:100px;
        width:150px;
        height:22px;
		}


	</style>


	<div align="left">
	<table>
		<tr>
			<td>
            <a href="excel.php"><input type="submit" class="boton" id="generarexcel" name="" value="Generar excel"></input></a>
			</td>
			<td> 
				<a href="formulariousuarios.php"><input type="submit" class="boton2" id="registro" name="" value="Registrar a usuario"></input></a>
            <!--<a href="http://localhost/wfijtable\Codes\html2pdf\pdf/pdf2.php"><input type="submit" id="generarpdf" name="" value="Generar pdf"></input></a>-->
			</td>
			<td><a href="subirarchivopdf.php"><input type="submit" class="boton3" id="subirarchivo" name="" value="Subir documento pdf/*" ></input></a></td>
		</tr>

	</table>
</div>


<br>




</body>
</html>