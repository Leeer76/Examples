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
		
		<title>Form</title>
	</Head>
	
	<body id="wrapper">
		<div class="fluid-container">
			<header>
				<h1>Acme Repair</h1>
				<h3>Add Customer</h3>
			</header>
		</div>	
			<nav data-spy="affix" data-offset-top="197">
			<ul>
				<li><a href="../../home.html.php">Home</a></li>
				<li><a href="../view/index.php">Customers</a>
					<ol>
						<li><a href="../Add/index.php">Add Customer</a></li>
					</ol>	
				</li>	
				<li><a href="../../Inventory/view/index.php">Inventory</a>
					<ol>
						<li><a href="../../Inventory/Add/index.php">Add Inventory</a></li>
						<li><a href="../../Inventory/view_by_type/index.php">Inventory By Type</a></li>
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
			<p id="first">
				<label>First name:</label><br>
				<input type="text" name="first" maxlength="35" required>
			</p>
			<p id="last">
				<label>Last name:</label><br>
				<input type="text" name="last" maxlength="50" required>
			</p>
			<p id="company">
				<label>Company:</label><br>
				<input type="text" name="company" maxlength="50" required>
			</p>
			<p id="street_add">
				<label>Street Address:</label><br>
				<input type="text" name="street_add" maxlength="30" required>
			</p>
			<p id="city">
				<label>City:</label><br>
				<input type="text" name="city" maxlength="25" required>
			</p>
			<p id="state">
				<label>State:</label><br>
				<select size="1" name="state" id="code">
					<option value=""></option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
			</p>
			<p id="postal_code">
				<label>Postal code:</label><br>
				<input type="text" name="postal_code" placeholder="XXXXX-XXXX" size="10" pattern="(\d{5})-(\d{4})" required>
			</p>
			<p id="email">
				<label>Email Address:</label><br>
				<input type="email" name="email" maxlength="80" required>
			</p>
			<p><input type="submit" name="submit" value="submit" id="submit"></p>
		</form>
		
		<footer>
			<p>&copy; <?php echo date("Y"); ?> Erik Lee</p>
		</footer>
		</div>
	</body>
	
</html>