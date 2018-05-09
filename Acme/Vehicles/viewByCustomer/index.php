<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: ../../Login/form/');
	}
	if(!isset($_POST['cust_ID']))
	{
		//the form has not been submitted
		include '../../Functions/DBfunctions.php';
		$customers = getCustomers();
		include 'input.html.php';
		exit();
	}
	else{
		//the form has been submitted
		//establish dbconnection
		include '../../Model/DBAdapter.php';
		
		$cust_ID = htmlspecialchars($_POST['cust_ID'], ENT_QUOTES, 'UTF-8');
		
		//generate a list of vehicles
		$sql = "SELECT * FROM vehicles WHERE customer_ID = $cust_ID";
		
		//retrive the data
		$result = $connection->query($sql);
		while($vehicle = $result->fetch())
		{
			$vehicles[] = $vehicle;
		}
			
		include 'output.html.php';
		exit();
	}
?>