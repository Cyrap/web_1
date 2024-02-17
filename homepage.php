<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        *{
  margin: 0;
  padding: 0;
}
.home-container{
  flex-direction: row;
  height: 100vh;
  display: grid;
  place-items: center;
  display: flex;
  justify-content: center;
}
.home-container >div{
    display: flex;
  align-items: center;
  justify-content: center;
}
.introText{
  color: orange;
  height: 50vh;
  display: grid;
  place-items: center;
  font-size: 2rem;
  padding: 10px;
  text-align: center;
}
.img-c{
    width: 50vw;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;

}
.img-c img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.img-c img:hover{
    transform: scale(1.1);
    transition: 0.2s ease-in-out;
}
@media (max-width:1500px){
    .home-container>div{
        flex-direction: column;
    }
}
@media (max-width:500px){
    .home-container{
        height: 100vh;
    }
    .home-container > div{
        flex-direction: column;
        justify-content: center;
    }
    .introText{
        font-size: 2rem;
        height: 30vh;
    }
    .img-c{
        height: 40vh;
        width: 30vw;
    }
}
    </style>
</head>
<body>
    <div class="home-container">
        <div>
            <p class="introText">
                Анхан шатны Web хөгжүүлэлтийн талаар сурцгаая.
            </p>
            <div class="img-c">
                <a href="#html">
                    <img src="img/html.png" alt="html">
                </a>
                <a href="#css">
                    <img src="img/css.png" alt="css">
                </a>
                <a href="#js">
                    <img src="img/js.png" alt="">
                </a>
            </div>
        </div>
    </div>
</body>
</html>
