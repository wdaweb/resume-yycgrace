<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./com/bootstrap.css">
    <link rel="stylesheet" href="./com/css.css">
    <script src="https://kit.fontawesome.com/9661638eaf.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
        body{
            margin: 0!important;
        }
        #topinfo{
            color: pink;
            width: 100vw;
            background-color: #ddd;
        }
        
        .lef{
            color: pink;
            background-color: #222;
        }
        .mid{
            color: pink;
            background-color: #555;
        }
        .rig{
            color: pink;
            background-color: #999;
        }

        .lef h1, .mid h1, .rig h1{
            position: relative;
            left: -30px;
            top: -10px;
            font-size: 4rem;
            /* 如何讓字跟著外框縮放 */
        }

        article h3{
            writing-mode: vertical-lr;
        }

        .piclink{
            height:200px;
            border-radius: 8px;
            border: #ffffff55 solid 5px;
            background-color: #99dddd99;
            /* 邊界與背景中間可以用padding留白嗎 */
            /* padding: 3px!important ; */
            /* background-color: transparent; */
        }

        .skillbar{
            width: 100%;
            height: 15px;
            border-radius: 5px;
            /* border: pink 1px solid; */
            background-color: #ffffff55;
            margin-top: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body class="d-flex row">

    <?php
        include_once "./com/base.php";
        include_once "./cut/pomain.php";
    ?>


    <section class="lef col-md-4 col-12">
    <div class="container">
        <h1 class="pb-5">BACK</h1>


        
        <?php
            $backs=all('re_pofo',['type'=>'back']);
            foreach($backs as $back){
                // id type title url pic text               
        ?>
        <article class="row pb-4">
            <div class="col-lg-2 col-12"><h3><?=$back['title'];?></h3></div>
            <div class="col-lg-10 col-12">
                <div class="piclink">
                    <a href="<?=$back['url'];?>"><img src="<?=$back['pic'];?>" alt=""></a>
                </div>
                <div class="skillbar"></div>
                <p><?=$back['text'];?></p>
            </div>
        </article>
        <?php
            };
        ?>



        <article class="row pb-4">
            <div class="col-lg-2 col-12"><h3>ti</h3></div>
            <div class="col-lg-10 col-12">
                <div class="piclink"></div>
                <div class="skillbar"></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi amet explicabo eaque quo repudiandae pariatur.</p>
            </div>
        </article>




    </div>
    </section>
    <section class="mid col-md-4 col-12">
    <div class="container">
        <h1 class="pb-5">FRONT</h1>


        <article class="row pb-4">
            <div class="col-lg-2 col-12"><h3>ti</h3></div>
            <div class="col-lg-10 col-12">
                <div class="piclink"></div>
                <div class="skillbar"></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi amet explicabo eaque quo repudiandae pariatur.</p>
            </div>
        </article>
        <article class="row pb-4">
            <div class="col-lg-2 col-12"><h3>ti</h3></div>
            <div class="col-lg-10 col-12">
                <div class="piclink"></div>
                <div class="skillbar"></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi amet explicabo eaque quo repudiandae pariatur.</p>
            </div>
        </article>
        <article class="row pb-4">
            <div class="col-lg-2 col-12"><h3>ti</h3></div>
            <div class="col-lg-10 col-12">
                <div class="piclink"></div>
                <div class="skillbar"></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi amet explicabo eaque quo repudiandae pariatur.</p>
            </div>
        </article>


    </div>
    </section>
    <section class="rig col-md-4 col-12">
    <div class="container">
        <h1 class="pb-5">OTHER</h1>


        <article class="row pb-4">
            <div class="col-lg-2 col-12"><h3>ti</h3></div>
            <div class="col-lg-10 col-12">
                <div class="piclink"></div>
                <div class="skillbar"></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi amet explicabo eaque quo repudiandae pariatur.</p>
            </div>
        </article>
        <article class="row pb-4">
            <div class="col-lg-2 col-12"><h3>ti</h3></div>
            <div class="col-lg-10 col-12">
                <div class="piclink"></div>
                <div class="skillbar"></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi amet explicabo eaque quo repudiandae pariatur.</p>
            </div>
        </article>

        
    </div>
    </section>
</body>
</html>

