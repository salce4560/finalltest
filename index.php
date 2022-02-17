<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<style>
    * {
        padding: 0;
        margin: 0;
        overflow-x: hidden;

    }

    .picture {
        background-image: url(https://picsum.photos/id/237/200/300);
        width: 800px;
        height: 588px;
        transition: all 2s -.2s;
        background-size: cover;
    }

    #space {
        width: 100%;
        height: 600px;
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
    }

    #space1 {
        width: 40%;
        height: 300px;
        background-color: rgb(239, 238, 241);
        margin: -30px;
        z-index: 1;
    }

    #space2 {
        margin-top: 90px;
        z-index: 2;
        font-family: Fantasy;
        font-size: 30px;
    }

    .word {
        font-size: 20px;
        margin-left: 15px;
    }
    .word1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 200px;
        margin-left: 200px;
        margin-right: 200px;
    }
    .father{
        display: flex;
        justify-content: center;
    }
    .exprience{  
        border: 30px #f8f9fa solid;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        height: 400px;
    }
    .exprience1{  
        border: 30px #f8f9fa solid;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        height: 400px;
        font-size: large;
    }
    .borderbox{
        border-right: 10px #f8f9fa solid;
        width: 50%;
        height: 300px;
    }

    #dog {
        margin: 3px;
    }

    #dogg {
        margin: 3px;
    }
    .toTop{
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 20px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?do=login">登入 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?do=reg">註冊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    $do=isset($_GET["do"])?$_GET["do"]:'my';
    $file="./front/".$do.".php";
    if (file_exists($file)) {
        include $file;
    }else{
        include "./front/my.php";
    }
    ?>


</body>

</html>