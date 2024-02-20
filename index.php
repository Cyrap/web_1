
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1d17848995.js" crossorigin="anonymous"></script>
    <title>Web 1</title>
    <style>
        .index-container{
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
    ::-webkit-scrollbar {
        width: 16px;
    }
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 5px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="index-container">
        <!-- <?php include "dashboard.php"; ?> -->
        <?php include "homepage.php"; ?>
    </div>
    <?php include "learn.php"; ?>
    <?php include "footer.php"; ?>
</body>
</html>
