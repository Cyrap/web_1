<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Orbitron&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/1d17848995.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles/style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .parent{
            position: sticky;
            top: 0;
            width: 30vw;
            height: 100vh;
            max-width: 300px;
            min-width: 200px;
            overflow-y: auto;
            background: rgba(0, 0, 0, 0.274);
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
            padding: 3px 2px 3px 24px;
        }
        .item:hover{
            cursor: pointer;
        }
        .content{
            height: fit-content;
            width: 90%;
        }
        .content-container{
            display: flex;
            justify-content: center;
            min-height: 100vh;
            height: fit-content;
            padding-bottom: 200px;
        }
        .single-content{
            background: rgba(76, 74, 70, 0.05);
            padding: 20px;
            min-height: 200px;
        }
        .content-section{
            display: flex;
            flex-direction: row;
        }
        .content-header{
            font-size: 2rem;
            color: var(--primary-color);
            padding: 10px 0;
        }
        .content-container{
            font-size: 1.5rem;
        }
        a{
            color: rgb(0, 128, 220);
            text-decoration: none;
        }
        .toggle{
            transition: 2s;
        }
        .toggle button{
            width: 40px;
            height: 40px;
            margin: 10px;
            border-radius: 50%;
            border: none;
        }
        .toggle button:hover{
            background: var(--primary-color);
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
    <?php include "navbar.php"; ?>
    <div class="toggle">
        <button id="toggle-btn" onclick="toggle()"><i id="toggle-icon" class="fa-solid fa-x"></i></button>
    </div>
    <div class="content-section">
        <div class="parent">
            <h3 class="header">HTML TOPICS</h3>
            <div id= "container" class="container"></div>
        </div>
        <div class="content-container">
            <div class="content">
                HTML
            </div>
        </div>
    </div>
<script>
    var screenWidth = window.innerWidth;
    if(screenWidth > 500){
        var isVisible =true;
    }else{
        var isVisible =false;
    }
    function toggle(){
        var sideBar = document.querySelector(".parent");
        var toggleIcon =document.getElementById("toggle-icon");
        var toggleBtn =document.getElementById("toggle-btn");
        if(isVisible === true){
            sideBar.style.display = "none";
            toggleIcon.classList.remove("fa-x");
            toggleIcon.classList.add("fa-arrow-right");
            toggleBtn.style.transform = "translateX(0)";
            isVisible =false;
        }else{
            sideBar.style.display = "block"
            toggleIcon.classList.remove("fa-arrow-right");
            toggleIcon.classList.add("fa-x");
            toggleBtn.style.transform = "translateX(150px)";
            isVisible =true;
        }
    }
    function fetchData() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "fetch_data.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                displayData(data);
                console.log(data);
            }else{
                console.log("data not found")
            }
        };
        xhr.send();
    }



    var container = document.getElementById("container");
    var content =document.querySelector(".content");
    var contentContainer = document.querySelector(".content-container");




    function displayData(data) {

        window.addEventListener("scroll", function() {
            data.forEach(function(item) {
                var contentHeader = document.getElementById(item.id);
                var contentTop = contentHeader.offsetTop;
                var contentBottom = contentHeader.offsetTop + contentHeader.offsetHeight;
                if (window.scrollY >= contentTop && window.scrollY < contentBottom) {
                    var sidebarItem = document.querySelector(".item[href='#" + item.id + "']");
                    sidebarItem.style.backgroundColor = "lightblue";
                } else {
                    var sidebarItem = document.querySelector(".item[href='#" + item.id + "']");
                    sidebarItem.style.backgroundColor = "";
                }
            });
        });

    for (var i = 0; i < data.length; i++) {
        var div = document.createElement("a");
        var contentWrap = document.createElement("div");
        var contentHeader = document.createElement("div");
        var singleContent = document.createElement("div");
        contentWrap.id =data[i].id;
        div.href = "#"+data[i].id;
        div.textContent = data[i].content_type;
        singleContent.classList.add("single-content");
        div.classList.add("item");
        singleContent.textContent = data[i].content;
        contentHeader.textContent = data[i].content_type;
        contentContainer.classList.add("content-container");
        contentHeader.classList.add("content-header");

        contentWrap.classList.add("contentWrapper");
        contentWrap.appendChild(contentHeader);
        contentWrap.appendChild(singleContent);
        container.appendChild(div);
        content.appendChild(contentWrap);
        // console.log("ID: " + data[i].id + ", Content Type: " + data[i].content_type,data[i].content);
    }
}
    fetchData();
</script>
</body>
</html>
