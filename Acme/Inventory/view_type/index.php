<?php
	include '../../Model/DBAdapter.php';
	
	$sql = 'SELECT* FROM types';
	$result = $connection->query($sql);
	
	while($type = $result->fetch())
	{
		$types[] = $type;
	}

	include 'inventorys.html.php';
	
?>