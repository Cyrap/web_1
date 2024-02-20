<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        *{
    margin: 0;
    padding: 0;
   }
   .nav-container{
       display: flex;
       justify-content: center;
       align-items: center;
       background: rgba(255, 167, 4, 0.9);
   }
   .nav-parent{
       display: flex;
       align-items: center;
       justify-content: space-between;
       width: 85%;
       border-radius: 10px;
   }
   .nav-btn{
       padding: 20px;
       border: none;
       border-radius: 5px;
       font-weight: bold;
       margin: 2px;
   }
   .logo{
    height: 50px;
    width: 50px;
   }
   .nav-btn a{
    width: 100%;
    height: 100%;
    padding: 10px;
   }
   .nav-btn a{
    text-decoration: none;
   }
   .btn-c{
    display: flex;
    flex-direction: row;
   }
   @media (max-width:500px){
    .nav-parent{
        width:100%;
    }
    .nav-btn{
        padding:5px;
    }
    .fa-right-to-bracket{
        color: rgb(0, 128, 220);
    }
   }
    </style>
</head>
<body>
<nav>
   <div class="nav-container">
    <div class="nav-parent">
        <a href="index.php">
            <img src="img/logov2.png" class="logo" alt="">
        </a>
    <div class="btn-c">
            <?php include "screen-mode-switch.php"; ?>
    </div>
    <a class="nav-btn" href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a>
    </div>
   </div>
   <script>

   </script>
</nav>
</body>
</html>