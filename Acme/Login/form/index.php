<?php
if(!isset($_POST['user']))
{
	//the form has not been submitted
	include 'myForm.html.php';
	exit();
}
else
{	include '../../Functions/DBfunctions.php';
	//when form has been submitted
	$username = htmlspecialchars($_POST['user'], ENT_QUOTES, 'utf-8');
	$password = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'utf-8');
	
	//check if user name and pass word are correct
	if(validUser($username, $password)){
		$user = getUser($username, $password);
		
		session_start();
		$_SESSION['username'] = $user['user_name'];
		$_SESSION['access_level'] = $user['access_level'];
		
		
		header('Location: ../../Customer/View/');
	}else{
		include 'myForm.html.php';
		exit();
	}
}
?>