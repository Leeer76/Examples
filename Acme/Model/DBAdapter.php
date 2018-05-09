<?php
try
{
	$dsn = 'mysql:host=localhost;dbname=acmerepair';
	$username = 'acmeUser';
	$password = 'acmePass';
	
	$connection = new PDO($dsn, $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$connection->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
	$output = 'Unable to connect to the database server' . $e->getMessage();
	exit();
}
?>