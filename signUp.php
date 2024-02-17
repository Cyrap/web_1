<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password before storing it

    $conn = new mysqli('localhost', 'root', '', 'web1');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        echo "Username already exists.";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (user_name, user_password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: index.php");
        } else {
            echo "Error registering user.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бүртгүүлэх</title>
    <link rel="stylesheet" href="styles/signUp.css">
</head>
<body>
  <div class="parent">


<form method="post" action="signup.php" class="container">
    <h2>Бүртгүүлэх</h2>
    <input type="text" id="username" placeholder="Нэвтрэх нэр" name="username" required><br><br>
    <input type="password" id="password" placeholder="Нууц үг" name="password" required><br><br>
    <input class="submit-btn" type="submit" value="Бүртгүүлэх">
    <a href="login.php">Нэвтрэх</a>
</form>    

</div>
</body>
</html>
