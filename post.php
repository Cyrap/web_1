<?php 
$formSubmitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $content_type = $_POST["content_type"];
    $content = $_POST["content"]; 
    $language_type = $_POST["language_type"];

    $conn = new mysqli('localhost', 'root', '', 'web1');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO html (content_type, content, post_user, language_name) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $content_type, $content, $user_name, $language_type);

    if ($stmt->execute()) {
        $formSubmitted = true;
    } else {
        echo "Failed: " . $stmt->error;
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
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/1d17848995.js" crossorigin="anonymous"></script>
<style>
    .post-wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .post-container{
        background: var(--primary-color);
        padding: 2vw;
        border-radius: 5px;
        min-width: 200px;
    }
    .title{
        display: flex;
        flex-direction: column;
    }
    .title input{
        padding: 5px;
        border-radius: 5px;
        margin: 10px 0;
    }
    .option{
        padding: 5px;
        margin: 10px 0;
    }
    .option select{
        padding: 5px;
    }
    .submit{
        padding: 5px 10px;
    }
    .submit:hover{
        background: green;
        cursor: pointer;
        color: white;
        font-weight: 400;
        position: relative;
    }
</style>
</head>
<body>
    <?php include "navbar.php"?>
<form method="post" action="" onsubmit="formSubmitted = true;">
    <div class="post-wrapper">
        <div class="post-container">
            <div class="title">
                <label for="input">Нийтлэлийн гарчиг</label>
                <input type="text" placeholder="..." name="content_type"> 
            </div>
            <select name="language_type" class="option">
                <option value="html">HTML</option>
                <option value="CSS">CSS</option>
                <option value="Javascript">Javascript</option>
            </select>
            <div>
                <textarea name="content" id="" cols="45" rows="20"></textarea>
            </div>
            <input type="hidden" name="user_name" id="user_id" <?php if (!$formSubmitted) echo 'value="' . htmlspecialchars($_POST['user_name'] ?? '') . '"'; ?>>
            <button type="submit" class="submit">Нийтлэх</button>    
        </div>
    </div>
</form>

<script>
    if (!<?php echo json_encode($formSubmitted); ?>) {
        document.getElementById("user_id").value = localStorage.getItem("username");
    }
</script>

</body>
</html>
