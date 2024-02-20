<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli('localhost', 'root', '', 'web1');
    if ($conn->connect_error) {
        $response['error'] = "Connection Failed: " . $conn->connect_error;
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            if (password_verify($password, $row['user_password'])) {
                $response['success'] = true;
            } else {
                $response['error'] = "Нууц үг буруу байна";
            }
        } else {
            $response['error'] = "Хэрэглэгч олдсонгүй";
        }
        $stmt->close();
        $conn->close();
    }
    echo json_encode($response);
}
?>
