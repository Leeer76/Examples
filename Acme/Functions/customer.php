<?php

include '../Model/DBAdapter.php';

function getCustomer()
{
	global $connection;
	
	$sql = "SELECT * FROM customers";
	$result = $connection->query($sql);
	
	while($customer = $result->fetch())
	{
		$customers[]=$customer;
	}
	return $customers;
}
?>