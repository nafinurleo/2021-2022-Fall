<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vihamsm";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}		
	
	$sql = "SELECT * FROM adminleo";

	$data = $connection->query($sql);

	if ($data->num_rows > 0) {
		while ($row = $data->fetch_assoc()) {
			echo "Name: " . $row["firstname"];
			echo "<hr>";
	}
}

	$connection->close();
?>