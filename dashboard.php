<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Orbitron&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .parent{
            width: 30vw;
            height: 100vh;
            /* background: #CECECE; */
            max-width: 300px;
            min-width: 200px;
            overflow-y: auto;
        }
        .container{
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        .header{
            padding: 10px 10px 10px 10px;
        }
        .item{
            font-size: 20px;
            /* background: whitesmoke; */
            padding: 3px 2px 3px 24px;
        }
        .item:hover{
            /* background: #989898; */
            cursor: pointer;
        }
        @media (max-width:500px){
            .parent{
                width: 0;
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="parent">
        <h3 class="header">HTML TOPICS</h3>
        <div id= "container" class="container"></div>
    </div>
<script>
    function fetchData() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "fetch_data.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                displayData(data);
            }else{
                console.log("data not found")
            }
        };
        xhr.send();
    }
    function displayData(data) {
        var container = document.getElementById("container");
        for (var i = 0; i < data.length; i++) {
            var div = document.createElement("div");
            div.textContent = data[i];
            div.classList.add("item")
            container.appendChild(div);
        }
    }
    fetchData();
</script>
</body>
</html>
