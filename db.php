<?php
	$connection = mysqli_connect('127.0.0.1', 'root', '123', 'testdb');
	if (!$connection)
	{
		echo 'Something wenr wrong, sorry!';
		echo mysqli_connect_error();
		exit();
	}
	
	function insert_to_db()
	{
		if (isset($_POST['t_agr']))
			$t_agr = $_POST['t_agr'];
		$e_date = $_POST['date'];
		$c_name = $_POST['c_name'];
		$b_name = $_POST['b_name'];
		$serv = $_POST['serv'];
		$agreement = '<p style="font-size: 20px; color: red; text-align: center;">' . $t_agr . '</p><p>Effective date: ' . $e_date . '</p><p>1. Overview</p><p>' . $c_name . ' on behalf of the ' . $b_name . ', has developed this ' . $t_agr . ' to explain how ' . $b_name . 'as a Data Controller, may collect, retain, process, share and transfer your Personal Data when you visit our ' . $serv . ' and does not apply to online websites or services that we do not own or control, including websites or services of other ' . $b_name . ' Users.<p/>';
		mysqli_query($GLOBALS["connection"], "INSERT INTO `main` (`id`, `type of agreement`, `effective date`, `company name`, `brand name`, `services`, `agreement`) VALUES (NULL, '$t_agr', '$e_date', '$c_name', '$b_name', '$serv', '$agreement')");
		return (mysqli_fetch_assoc(mysqli_query($GLOBALS["connection"], "SELECT * FROM `main` WHERE `company name` = '$c_name' AND `type of agreement` = '$t_agr'")));
	}
?>
	