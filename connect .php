<?php 
	$name = $_POST['name']
	$email = $_POST['email']
	$message = $_POST['message']

	//database connect
	$conn = new mysqli('sql6.freesqldatabase.com','sql6425026','Sq8nKFFbMJ','sql6425026');
	if ($conn->connect_error) {
		// code...
		die('Connection Failed : '.conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into contactme(name, email, message) values(?, ?, ?)");
		$stmt->db2_bind_param("ssssi",$name,$email,$message);
		$stmt->execute();
		echo "send Succesfully.....";
		$stmt->close();
		$conn->close();
	}
?>
