<?php
include '../../Model/DBAdapter.php';

function getCustomers()
{
	global $connection;
	
	$sql = "SELECT * FROM customers";
	$results = $connection->query($sql);
	
	while($customer = $results->fetch())
	{
		$customers[]=$customer;
	}
	return $customers;
}


function addCustomers()
{
	global $connection;
	
	//read in values from form	
	$first = htmlspecialchars($_POST['first'], ENT_QUOTES, 'UTF-8');
	$last = htmlspecialchars($_POST['last'], ENT_QUOTES, 'UTF-8');
	$company = htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8');
	$street_add = htmlspecialchars($_POST['street_add'], ENT_QUOTES, 'UTF-8');
	$city = htmlspecialchars($_POST['city'], ENT_QUOTES, 'UTF-8');
	$state = htmlspecialchars($_POST['state'], ENT_QUOTES, 'UTF-8');
	$postal_code = htmlspecialchars($_POST['postal_code'], ENT_QUOTES, 'UTF-8');
	$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
	
	//create sql string
	$query = 'INSERT INTO customers(first_name, last_name, company, address, city, state, postal_code, email)
			VALUES
			(:first, :last, :company, :street_add, :city, :state, :postal_code, :email)';
	
	//prepare sql statement
	$statement = $connection->prepare($query);
	
	//bind value of variable to placeholder
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
	$statement->bindValue(':company', $company);
	$statement->bindValue(':street_add', $street_add);
	$statement->bindValue(':city', $city);
	$statement->bindValue(':state', $state);
	$statement->bindValue(':postal_code', $postal_code);
	$statement->bindValue(':email', $email);
	
	//execute statement
	$statement->execute();
}

function getVehicles()
{
	global $connection;
	$sql = 'SELECT description, first_name, last_name
			FROM customers c
			JOIN vehicles v 
			on v.customer_ID = c.customer_ID
			ORDER BY last_name';
	$result = $connection->query($sql);
	
	while($vehicle = $result->fetch())
	{
		$vehicles[] = $vehicle;
	}
	return $vehicles;
}

function addVehicles()
{
	global $connection;
	
	//read in values from form	
	$customer_ID = htmlspecialchars($_POST['customer_ID'], ENT_QUOTES, 'UTF-8');
	$description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');
	$year = htmlspecialchars($_POST['year'], ENT_QUOTES, 'UTF-8');
	$vehicle_type = htmlspecialchars($_POST['vehicle_type'], ENT_QUOTES, 'UTF-8');
	$notes = htmlspecialchars($_POST['notes'], ENT_QUOTES, 'UTF-8');
		
	//create sql string
	$query = 'INSERT INTO vehicles(customer_ID, description, year, vehicle_type, notes)
			VALUES
			(:customer_ID, :description, :year, :vehicle_type, :notes)';
	
	//prepare sql statement
	$statement = $connection->prepare($query);
	
	//bind value of variable to placeholder
	$statement->bindValue(':customer_ID', $customer_ID);
	$statement->bindValue(':description', $description);
	$statement->bindValue(':year', $year);
	$statement->bindValue(':vehicle_type', $vehicle_type);
	$statement->bindValue(':notes', $notes);
	
	//execute statement
	$statement->execute();
}

function getInventorys()
{
	global $connection;
	
	$sql = 'SELECT* FROM inventory';
	$result = $connection->query($sql);
	
	while($inventory = $result->fetch())
	{
		$inventorys[] = $inventory;
	}
	
	return $inventorys;	
}

function addInventorys()
{
	global $connection;
	
		
	//read in values from form	
	$ID = htmlspecialchars($_POST['ID'], ENT_QUOTES, 'UTF-8');
	$descrip = htmlspecialchars($_POST['descrip'], ENT_QUOTES, 'UTF-8');
	$cost = htmlspecialchars($_POST['cost'], ENT_QUOTES, 'UTF-8');
	$in_stock = htmlspecialchars($_POST['in_stock'], ENT_QUOTES, 'UTF-8');
	$location = htmlspecialchars($_POST['location'], ENT_QUOTES, 'UTF-8');
	$type_id = htmlspecialchars($_POST['type_ID'], ENT_QUOTES, 'UTF-8');
	$notes = htmlspecialchars($_POST['notes'], ENT_QUOTES, 'UTF-8');
	
	//create sql string
	$query = 'INSERT INTO inventory VALUES
			(:ID, :descrip, :cost, :in_stock, :location, :type, :notes)';
	
	//prepare sql statement
	$statement = $connection->prepare($query);
	
	//bind value of variable to placeholder
	$statement->bindValue(':ID', $ID);
	$statement->bindValue(':descrip', $descrip);
	$statement->bindValue(':cost', $cost);
	$statement->bindValue(':in_stock', $in_stock);
	$statement->bindValue(':location', $location);
	$statement->bindValue(':type', $type_id);
	$statement->bindValue(':notes', $notes);
	
	//execute statement
	$statement->execute();
}
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

function getUser($username, $password){
	global $connection;
	//find username and access level
	
	$query = "SELECT user_name, access_level FROM users WHERE user_name = :user AND password = SHA1(:pass)";
	
	$statement = $connection->prepare($query);
	
	$statement->bindValue(':user', $username);
	$statement->bindValue(':pass', $password);
	$statement->execute();
	
	$row = $statement->fetch();
	
	return $row;
}

function validUser($user, $pass){
	global $connection;
	
	try{
		$query = "SELECT COUNT(*) FROM users WHERE user_name = :user AND password = SHA1(:pass)";
		
		$statement = $connection->prepare($query);
		
		$statement->bindValue(':user', $user);
		$statement->bindValue(':pass', $pass);
		$statement->execute();
	}
	catch(PDOExcetpion $e){
		echo "Error searching for user";
		exit();
	}
	
	$row = $statement->fetch();
	if($row[0] == 1){
		return true;
	}else{
		return false;
	}
}
?>