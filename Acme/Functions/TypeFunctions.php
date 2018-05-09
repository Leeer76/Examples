<?php
include '../../Model/DBAdapter.php';

function getTypes()
{
	global $connection;
	
	$sql = "SELECT * FROM types";
	$results = $connection->query($sql);
	
	while($type = $results->fetch())
	{
		$types[]=$type;
	}
	return $types;
}
?>