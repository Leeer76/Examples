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
		
		<title>Results</title>
	</Head>
	
	<body id="php">
		<div class="fluid-container">
		<header>
				<h1>Acme Repair</h1>
				<h3>Results</h3>
			</header>
		</div>
			<nav data-spy="affix" data-offset-top="197">
			<ul>
				<li><a href="home.html.php">Home</a></li>
				<li><a href="Customer/view/index.php">Customers</a>
					<ol>
						<li><a href="Customer/Add/index.php">Add Customer</a></li>
					</ol>	
				</li>	
				<li><a href="Inventory/view/index.php">Inventory</a>
					<ol>
						<li><a href="Inventory/Add/index.php">Add Inventory</a></li>
						<li><a href="Inventory/view_by_type/index.php">Inventory By Type</a></li>
					</ol>
				</li>
				<li><a href="Vehicles/view/index.php">Vehicles</a>
					<ol>
						<li><a href="Vehicles/Add/index.php">Add Vehicle</a></li>
						<li><a href="Vehicles/viewByCustomer/index.php">By Customer</a></li>
					</ol>
				</li>
			</ul>
		</nav>
		<div class="fluid-container" style="height: 1000px">
		<?PHP
			echo $output;
		?>
		</div>
	</body>
	
</html>