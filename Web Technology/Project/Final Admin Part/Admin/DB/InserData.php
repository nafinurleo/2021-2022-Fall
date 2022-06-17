<?php	
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	else {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vihamsm";
	
	$connection = new mysqli($servername, $username, $password, $dbname);
	
	if ($connection->connect_error) {
	die("Connection failed: " . $connection->connect_error);
	}
	else{
	$sql = "select * from adminleo where username = '".$username."'";
	
	$data = $connection->query($sql);

	$sql = "INSERT INTO user (firstname, lastname, password, username, DOB, address, Phone) VALUES ($firstname, $lastname, $password, $username, $DOB, $address, $Phone)";
	$stmt = $connection->prepare($sql);
	$res = $stmt->execute();
	
	if ($res) {
	echo "<b>Successfully registered</b>";
	}
	else {
	echo "<b>Error while registering!</b>";
	}
	$connection->close();
	}
	}
?>
