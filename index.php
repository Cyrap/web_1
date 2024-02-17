
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 1</title>
    <style>
        .index-container{
            display: flex;
            justify-content: center;
            flex-direction: row;
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
