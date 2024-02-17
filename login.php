<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
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
        if (password_verify($password, $row['user_password'])) {
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Нууц үг буруу байна')</script>";
        }
    } else {
        echo "<script>alert('Хэрэглэгч олдсонгүй')</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
<!-- <?php include "navbar.php"; ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles/signUp.css">
</head>
<body>
<div class="parent">
<form method="post" action="login.php" class="container">
    <h2>Нэвтрэх</h2>
    <input type="text" id="username" placeholder="Нэвтрэх нэр" name="username" required><br><br>
    <input type="password" id="password" placeholder="Нууц үг" name="password" required><br><br>
    <input class="submit-btn" type="submit" value="Нэвтрэх">
    <a href="signUp.php">Бүртгүүлэх</a>
</form>    

</div>  
</body>
</html>
