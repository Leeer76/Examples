<?php
session_start();
	if(!isset($_SESSION['username'])){
		header('Location: ../../Login/form/');
	}
if(!isset($_POST['ID']))
{
	include '../../Functions/TypeFunctions.php';

	//the form has not been submitted
	include 'myForm.html.php';
	exit();
}
else
{
	//when form has been submitted
	include '../../Model/DBAdapter.php';
	
	include '../../Functions/DBfunctions.php';
	
	addInventorys();
	
	//redirects user to a fresh view page where the sql should pull
	header('Location: ../view/');
	exit();
}

?>