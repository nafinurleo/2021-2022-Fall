<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vihamsm";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}

	$sql = "DELETE FROM adminleo WHERE id = ?";

	$stmt = $connection->prepare($sql);
	$stmt->bind_param("i", $id);
	$id = 2;
	$response = $stmt->execute();

	if ($response) {
		echo "Data Deleted Succssfully";
	}
	else {
		echo "Error while deleting";
	}

	$connection->close();
?>