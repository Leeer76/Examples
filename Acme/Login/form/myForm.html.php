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
					<h3>Login</h3>
			</header>
		</div>
		<form action="" method="post">
			<p id="user">
				<label>Username:</label><br>
				<input type="text" name="user" maxlength="35" required>
			</p>
			<p id="pass">
				<label>Password:</label><br>
				<input type="password" name="pass" maxlength="15" required>
			</p>
			
			<p><input type="submit" name="submit" value="submit" id="submit"></p>
		</form>
	</body>
	
</html>