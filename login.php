<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нэвтрэх</title>
    <link rel="stylesheet" href="styles/signUp.css">
    <script>
    function saveToLocalStorage() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "login-fetch.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    localStorage.setItem('username', username);
                    window.location.href = "index.php";
                } else {
                    alert(response.error);
                }
            }
        };
        xhr.send("username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password));
    }
</script>

</head>
<body>
<div class="parent">
    <form onsubmit="saveToLocalStorage(); return false;" class="container">
        <h2>Нэвтрэх</h2>
        <input type="text" id="username" placeholder="Нэвтрэх нэр" name="username" required><br><br>
        <input type="password" id="password" placeholder="Нууц үг" name="password" required><br><br>
        <input class="submit-btn" type="submit" value="Нэвтрэх">
        <a href="signUp.php">Бүртгүүлэх</a>
    </form>    
</div>  
</body>
</html>
