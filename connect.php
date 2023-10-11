<?php
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone_number = $_POST['phone_number'];
	echo"running";
	// Database connection
	$conn = new mysqli('localhost', 'root','', 'registration');
	if ($conn->connect_error) {
		die("Connection Failed: " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO registration (user_name, email, password_password, phone_number) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("sssi", $user_name, $email, $password, $phone_number);
		$execval = $stmt->execute();

		if ($execval) {
			echo "Registration successfully...";
		} else {
			echo "Error: " . $conn->error;
		}
		$stmt->close();
		$conn->close();
	}
?>
