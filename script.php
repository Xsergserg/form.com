<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>Title: Test</title>
	</head>
	<body>
		<?php
			include 'db.php';
			$result = insert_to_db ();
			$c_req = $result['document_request'];
			$c_name = $result['company_name'];
			$res_agreement = $result['agreement'];
			echo '<p class="header_text">Agreement is ready and sucsessfully added into DB!</p><p style="text-align: center">Text of agreemen tooken from DB</p><hr/>' . $res_agreement;
		?>
	</body>
</html>