<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: ../../Login/form/');
	}
	include '../../Model/DBAdapter.php';
	
	include '../../Functions/DBfunctions.php';
	
	$inventorys = getInventorys();

	include 'inventorys.html.php';
	
?>