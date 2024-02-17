<?php
$conn = new mysqli('localhost', 'root', '', 'web1');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT content_type FROM html"); 
$stmt->execute();
$result = $stmt->get_result();

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row["content_type"];
    }
}

$stmt->close();
$conn->close();

// Output data as JSON
echo json_encode($data);
?>
