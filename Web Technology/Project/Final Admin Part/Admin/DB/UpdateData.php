<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vihamsm";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}

	$sql = "UPDATE adminleo SET address = ? WHERE id = ?";

	$stmt = $connection->prepare($sql);
	$stmt->bind_param("si", $address, $id);
	$address = "def street";
	$id = 2;
	$response = $stmt->execute();

	if ($response) {
		echo "Data Updated Succssfully";
	}
	else {
		echo "Error while updating";
	}
	$connection->close();
?>