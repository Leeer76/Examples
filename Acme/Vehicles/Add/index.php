<?php
session_start();
	if(!isset($_SESSION['username'])){
		header('Location: ../../Login/form/');
	}
if(!isset($_POST['customer_ID']))
{
	//the form has not been submitted
	include 'myForm.html.php';
	exit();
}
else
{
	//when form has been submitted
	
	//connect to the database
	include '../../Model/DBAdapter.php';
	
	include '../../Functions/DBfunctions.php';
	
	addVehicles();
	
	
	//redirects user to a fresh view page where the sql should pull
	header('Location: ../view/');
	exit();
}

?>