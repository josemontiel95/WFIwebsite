<?php

try
{
	//Open database connection
	$con = mysql_connect("localhost","root","");
	mysql_select_db("wfi", $con);

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get record count
		$result = mysql_query("SELECT COUNT(*) AS RecordCount FROM  registrosuser;");
		$row = mysql_fetch_array($result);
		$recordCount = $row['RecordCount'];

 if(isset($_REQUEST['variable'])){
        //    $q = $mysqli->real_scapo
            $b="WHERE  (Nombre LIKE '%".$_REQUEST['variable']."%') or (Puesto LIKE '%".$_REQUEST['variable']."%') or (Correo LIKE '%".$_REQUEST['variable']."%') or (TelTrabajo LIKE '%".$_REQUEST['variable']."%') or (TelEmergencia LIKE '%".$_REQUEST['variable']."%') or (imei LIKE '%".$_REQUEST['variable']."%') or (usuario LIKE '%".$_REQUEST['variable']."%') or (password LIKE '%".$_REQUEST['variable']."%') or (cuenta_huawuei LIKE '%".$_REQUEST['variable']."%') or (password2 LIKE '%".$_REQUEST['variable']."%') or (nss LIKE '%".$_REQUEST['variable']."%') or (curp LIKE '%".$_REQUEST['variable']."%') or (domicilio LIKE '%".$_REQUEST['variable']."%') or (id2 LIKE '%".$_REQUEST['variable']."%') or (certi_medico LIKE '%".$_REQUEST['variable']."%') or (cd3_alturas LIKE '%".$_REQUEST['variable']."%') or (cd3_pri_auxilios LIKE '%".$_REQUEST['variable']."%') or (cd3_ries_electricos LIKE '%".$_REQUEST['variable']."%') or (creedenciales_wfi LIKE '%".$_REQUEST['variable']."%') or (credenciales_huawuei LIKE '%".$_REQUEST['variable']."%') or (comisionamiento LIKE '%".$_REQUEST['variable']."%') or (instalacion LIKE '%".$_REQUEST['variable']."%') or (pim LIKE '%".$_REQUEST['variable']."%')";
        }else {
            $b = "";
        }

		//Get records from database
		$result = mysql_query("SELECT * FROM  registrosuser ORDER BY " . $_GET["jtSorting"] . " LIMIT " . $_GET["jtStartIndex"] . "," . $_GET["jtPageSize"] . ";");
		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['TotalRecordCount'] = $recordCount;
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		$result = mysql_query("INSERT INTO  registrosuser(Nombre,Puesto,Correo,TelTrabajo,TelEmergencia,imei,usuario,password,cuenta_huawuei,password2,nss,curp,domicilio,id2,certi_medico,cd3_alturas,cd3_pri_auxilios,cd3_ries_electricos,creedenciales_wfi, credenciales_huawuei,comisionamiento,instalacion,pim) VALUES ('" . $_POST["Nombre"] . "', '" . $_POST["Puesto"] . "','" . $_POST["Correo"] . "','" . $_POST["TelTrabajo"] . "','" . $_POST["TelEmergencia"] . "','" . $_POST["imei"] . "','" . $_POST["usuario"] . "','" . $_POST["password"] . "','" . $_POST["cuenta_huawuei"] . "','" . $_POST["password2"] . "','" . $_POST["nss"] . "','" . $_POST["curp"] . "','" . $_POST["domicilio"] . "','" . $_POST["id2"] . "','" . $_POST["certi_medico"] . "','" . $_POST["cd3_alturas"] . "','" . $_POST["cd3_pri_auxilios"] . "','" . $_POST["cd3_ries_electricos"] . "','" . $_POST["creedenciales_wfi"] . "','" . $_POST["credenciales_huawuei"] . "','" . $_POST["comisionamiento"] . "','" . $_POST["instalacion"] . "','". $_POST["pim"] . "');");
		
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM  registrosuser WHERE id = LAST_INSERT_ID();");
		$row = mysql_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		//Update record in database
		$result = mysql_query("UPDATE registrosuser SET Nombre = '" . $_POST["Nombre"] . "', Puesto = '" . $_POST["Puesto"] . "',Correo = '" . $_POST["Correo"] . "',TelTrabajo = '" . $_POST["TelTrabajo"] . "',TelEmergencia = '" . $_POST["TelEmergencia"] . "',imei = '" . $_POST["imei"] . "',usuario = '" . $_POST["usuario"] . "',password = '" . $_POST["password"] . "',cuenta_huawuei = '" . $_POST["cuenta_huawuei"] . "',password2 = '" . $_POST["password2"] . "',nss = '" . $_POST["nss"] . "',curp = '" . $_POST["curp"] . "',domicilio = '" . $_POST["domicilio"] . "',id2 = '" . $_POST["id2"] . "',certi_medico = '" . $_POST["certi_medico"] . "',cd3_alturas = '" . $_POST["cd3_alturas"] . "',cd3_pri_auxilios = '" . $_POST["cd3_pri_auxilios"] . "',cd3_ries_electricos = '" . $_POST["cd3_ries_electricos"] . "',creedenciales_wfi = '" . $_POST["creedenciales_wfi"] . "',credenciales_huawuei = '" . $_POST["credenciales_huawuei"] . "',comisionamiento = '" . $_POST["comisionamiento"] . "',instalacion = '" . $_POST["instalacion"] . "',pim = '" . $_POST["pim"] . "' WHERE id = " . $_POST["id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM registrosuser WHERE id = " . $_POST["id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>