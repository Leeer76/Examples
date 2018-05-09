<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: ../../Login/form/');
	}
	if(!isset($_POST['inventory_ID']))
	{
		//the form has not been submitted
		include '../../Functions/DBfunctions.php';
		$types = getTypes();
		include 'input.html.php';
		exit();
	}
	else{
		//the form has been submitted
		//establish dbconnection
		include '../../Model/DBAdapter.php';
		
		$inventory_ID = htmlspecialchars($_POST['inventory_ID'], ENT_QUOTES, 'UTF-8');
		
		//generate a list of vehicles
		$sql = "SELECT * FROM inventory WHERE type = $inventory_ID";
		
		//retrive the data
		$result = $connection->query($sql);
		while($inventory = $result->fetch())
		{
			$inventories[] = $inventory;
		}
			
		include 'output.html.php';
		exit();
	}
?>