<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="author" content="Erik Lee">
		<meta name="date" content="Oct 17, 2016">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="../../style.css">
		
		<!-- [if 1t IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif] -->
		
		<title>Acme Repair</title>
	</Head>
	
	<body id="wrapper">
		<div class="fluid-container">
			<header>
					<h1>Acme Repair</h1>
					<h3>Add Inventory</h3>
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
				<li><a href="../view/index.php">Inventory</a>
					<ol>
						<li><a href="../Add/index.php">Add Inventory</a></li>
						<li><a href="../view_by_type/index.php">Inventory By Type</a></li>
					</ol>
				</li>
				<li><a href="../../Vehicles/view/index.php">Vehicles</a>
					<ol>
						<li><a href="../../Vehicles/Add/index.php">Add Vehicle</a></li>
						<li><a href="../../Vehicles/viewByCustomer/index.php">By Customer</a></li>
					</ol>
				</li>
				<li><a href="../../Logout/logout.php">Logout</a></li>
			</ul>
		</nav>
			
		<div class="fluid-container" style="height: 1000px">
		
		<form action="" method="post">
			<p id="ID">
				<label>Inventory ID:</label><br>
				<input type="text" name="ID" maxlength="30" required>
			</p>
			<p id="descrip">
				<label>Description:</label><br>
				<input type="text" name="descrip" maxlength="50" required>
			</p>
			<p id="cost">
				<label>Cost:</label><br>
				<input type="text" name="cost" maxlength="10" required>
			</p>
			<p id="in_stock">
				<label>In Stock:</label><br>
				<input type="text" name="in_stock" maxlength="6" required>
			</p>
			<p id="location">
				<label>Location:</label><br>
				<input type="text" name="location" maxlength="5">
			</p>
			<p id="type_ID">
				<label>Type:</label><br>
				<select name="type_ID">
			<?php foreach(getTypes() as $type): ?>
				<option value="<?php echo $type['type_ID']; ?>">
					<?php echo $type['description']; ?>
				</option>
				
			<?php endforeach; ?>
		</select>
			</p>
			<p id="notes">
				<label>Notes:</label><br>
				<textarea type="text" name="notes"></textarea>
			</p>
			<p><input type="submit" name="submit" value="submit" id="submit"></p>
		</form>
		<footer>
			<p>&copy; <?php echo date("Y"); ?> Erik Lee</p>
		</footer>
		</div>
	</body>
	
</html>