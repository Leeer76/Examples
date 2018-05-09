<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="author" content="Erik Lee">
		<meta name="date" content="Oct 17, 2016">
		<!-- [if 1t IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif] -->
		
		<link rel="stylesheet" href="defaultstyle/default.css">
		
		<title>Inventory</title>
	</Head>
	
	<body>
		<h1>Acme Inventory</h1>
		<select>
				<option value="">Inventory Type:</option>
			<?php foreach($types as $type): ?>
				<option value="<?php echo $type['type_ID']; ?>">
					<?php echo $type['description']; ?>
				</option>
				
			<?php endforeach; ?>
		</select>
		</table>
		<footer>
			<p>&copy; <?php echo date("Y"); ?> Erik Lee</p>
		</footer>
	</body>
	
</html>