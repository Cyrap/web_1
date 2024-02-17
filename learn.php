<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .page{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 60vh;
            width: 100vw;
            font-size: 20px;
            background: linear-gradient(#FF3437,#FF7A63);
        }
        .page >div{
            display: flex;
            flex-direction: column;
            width: 80%;
        }
        .page h3{
            font-size: 5rem;
        }
        .css{
            background: linear-gradient(#017EBA,#029DE2);
        }
        .js{
            background: linear-gradient(#FB9C27,#FECA3D);
            color: black;
        }
        .page button{
            width: fit-content;
            padding: 20px;
            border-radius: 10px;
            box-shadow: ;
            border: none;
            margin-top: 20px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        .page button:hover{
            box-shadow: rgba(255, 255, 255, 0.892) 0px 3px 8px;
        }
    </style>
</head>
<body>
    <div class="page html" id="html">
        <div>
            <h3>html</h3>
            <p>
                (Hypertext Markup Language) нь вэб хуудас үүсгэх, дизайн хийхэд хэрэглэгддэг стандарт хэл юм. Энэ нь вэб хуудасны бүтэц, агуулгыг тодорхойлох элементүүдээс бүрдэнэ. 
            </p>
            <br>
            <button>let's get started</button>
         </div>
    </div>
    <div class="page css" id="css">
        <div>
            <h3>CSS</h3>
            <p>
            CSS нь "Cascading Style Sheets" гэсэн үгийн товчлол юм. CSS нь вэб хуудсуудыг (HTML эсвэл XML) байрлуулах, зохион байгуулахад зориулагдсан компьютерийн хэл юм. Энэ хэл нь кодчиллын элементүүдийг агуулсан бөгөөд CSS файлууд (. css) гэж нэрлэгддэг эдгээр "каскадын загварын хуудас"-аас бүрддэг.
            </p>
            <br>
            <button>let's get started</button>
         </div>
    </div>
    <div class="page js" id="js">
        <div>
            <h3>Javascript</h3>
            <p>
            JavaScript бол динамикаар шинэчлэгдэж буй контент үүсгэх, мультимедиа, хөдөлгөөнт дүрс болон бусад бараг бүх зүйлийг удирдах боломжийг олгодог скрипт хэл юм.
            </p> 
            <br>
            <button>let's get started</button>
         </div>
    </div>
</body>
</html>