<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: ../../Login/form/');
	}
	
	include '../../Model/DBAdapter.php';

	include '../../Functions/DBfunctions.php';
	
	$customers = getCustomers();

	include 'customers.html.php';
?>