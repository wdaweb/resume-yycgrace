<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./com/bootstrap.css">
    <link rel="stylesheet" href="./com/css.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/9661638eaf.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- jq newset -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <header>
        <nav>
            


            




<!-- <i class="far fa-folder-open"></i> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="fas fa-laptop-code"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" id="tomain">main <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="toportfolio">portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tocontect">contect</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="topapperresume">papperresume</a>
        </li>
        </ul>
    </div>
</nav>











        </nav>
    </header>


    <?php
        include_once "./com/base.php";

        include_once "./cut/info.php";
        include_once "./cut/skill.php";
        include_once "./cut/experince.php";
        include_once "./cut/education.php";
    ?>

    <!-- <button id="btnn">55555</button>
    <p class="res"></p> -->
    

<script>
    // login
    document.querySelector('#login').addEventListener("click",function(){
        window.location.href='login.html';
    });

    // nav
    document.querySelector('#tomain').addEventListener("click",function(){
        window.location.href='index.php';
    });
    document.querySelector('#toportfolio').addEventListener("click",function(){
        window.location.href='portfolio.php';
    });
    document.querySelector('#tocontect').addEventListener("click",function(){
        window.location.href='contect.html';
    });
    document.querySelector('#topapperresume').addEventListener("click",function(){
        window.location.href='papperresume.html';
    });

    


    $('#btnn').click(function(){
    $.post("./testpost.php",{
        name: "abcabc",
        id: "456",
        res: "xyz"
    },function(data){
        $('.ress').html(data)
    });
});

</script>

</body>
</html>


<!-- 
document.location.pathname="/login.html"
直接轉址(改掉網址)

document.documentElement
整個網頁的DOM


 -->