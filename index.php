<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>Title: Test</title>
	</head>
	<body>
		<header class="header_text">Document creator v. 0. 1</header>
		<hr>
		<form method="POST" action="/script.php" class="form_text">
			<p>Type of document: 
				<input type="radio" name="t_agr" value="Privacy policy" checked />Privacy policy
				<input type="radio" name="t_agr" value="EULA (End-User License Agreement)" />EULA (End-User License Agreement)<br />
			</p>
			<p>Effective date: <input type="date" placeholder="Effective date" name="date" required></p>
			<p>Company name: <input type="text" placeholder="Company name" name="c_name" required></p>
			<p>Brand name: <input type="text" placeholder="brand_name" name="b_name" required><br>
			<p>Services provided : <input type="text" placeholder="Site, Android APP or other" name="serv" required><br>
			<hr/>			
			<input type="submit" value="Submit">
		</form>
	</body>
</html>




