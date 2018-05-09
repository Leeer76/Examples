<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="author" content="Erik Lee">
		<meta name="date" content="Oct 17, 2016">
		<!-- [if 1t IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif] -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="../../style.css">
		
		<title>Customers</title>
	</Head>
	
	<body>
	<div class="fluid-container">
		<header>
				<h1>Acme Repair</h1>
				<h3>Customer Vehicles</h3>
			</header>
	</div>
			<nav data-spy="affix" data-offset-top="197">
			<ul>
				<li><a href="../../home.html.php">Home</a></li>
				<li><a href="../../Customer/view/index.php">Customers</a>
					<ol>
						<li><a href="../../Customer/Add/index.php">Add Customer</a></li>
					</ol>	
				</li>	
				<li><a href="../../Inventory/view/index.php">Inventory</a>
					<ol>
						<li><a href="../../Inventory/Add/index.php">Add Inventory</a></li>
						<li><a href="../../Inventory/view_by_type/index.php">Inventory By Type</a></li>
					</ol>
				</li>
				<li><a href="../view/index.php">Vehicles</a>
					<ol>
						<li><a href="../Add/index.php">Add Vehicle</a></li>
						<li><a href="../viewByCustomer/index.php">By Customer</a></li>
					</ol>
				</li>
				<li><a href="../../Logout/logout.php">Logout</a></li>
			</ul>
		</nav>
		<div class="fluid-container" style="height: 1000px">
			<form action="" method="POST">
				<select name="cust_ID">
					<?php foreach($customers as $customer):?>
						<option value="<?php echo $customer['customer_ID'];?>">
							<?php echo $customer['first_name'] . ' ' . $customer['last_name'];?>
						</option>
					<?php endforeach;?>
					<option>
				</select>
				<p>
					<input type="submit" id="submit" name="submit" value="submit">
				</p>
			</form>
			<footer>
			<p>&copy; <?php echo date("Y"); ?> Erik Lee</p>
		</footer>
		</div>
	</body>
	
</html>