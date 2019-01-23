<html>
  <head>
    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/green/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
  <body>
  	<img src="logo_wfi_3.png" width="200" height="100">
	<div id="PeopleTableContainer" style="width: 3000px; "> </div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'WFI ',
				actions: {
					listAction: 'PersonActions.php?action=list',
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
						title: 'CD3_PRIMEROS_AUXILIOS',
						width: '20%'
					},
					cd3_ries_electricos: {
						title: 'CD3_RIESGOS_ELECTRICOS',
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

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');
		});
	</script>
	<table>
		<tr>
			<td>
            <a href="excel.php"><input type="submit" id="generarexcel" name="" value="Generar excel"></input></a>
			</td>
			<td> 
            <!--<a href="http://localhost/wfijtable\Codes\html2pdf\pdf/pdf2.php"><input type="submit" id="generarpdf" name="" value="Generar pdf"></input></a>
			</td>-->
		</tr>

	</table>
 

  </body>
</html>
