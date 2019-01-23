<?php

try
{
	//Open database connection
	$con = mysql_connect("db765669182.hosting-data.io","dbo765669182","Diciembre2018%");
	mysql_select_db("db765669182", $con);

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get records from database
		$result = mysql_query("SELECT * FROM admin;");
		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		$result = mysql_query("INSERT INTO admin(vacante, funciones, escolaridad, horario, numero_vacantes) VALUES('" . $_POST["vacante"] . "', '" . $_POST["funciones"] . "', '" . $_POST["escolaridad"] . "', '" . $_POST["horario"] . "', '" . $_POST["numero_vacantes"] . "');");
		
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM admin WHERE id = LAST_INSERT_ID();");
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
		$result = mysql_query("UPDATE admin SET vacante = '" . $_POST["vacante"] . "', funciones = '" . $_POST["funciones"] . "', escolaridad = '" . $_POST["escolaridad"] . "', horario = '" . $_POST["horario"] . "', numero_vacantes = '" . $_POST["numero_vacantes"] . "' WHERE id = " . $_POST["id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM admin WHERE id = " . $_POST["id"] . ";");

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
