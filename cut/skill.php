<?php
    // include_once "../com/base.php";
?>

<section class="skill">
    <div class="container">
        <article>
            <h1 class="maintitle">skill</h1>
            <div class="skitems d-flex flex-wrap">
                <?php
                    $skis=all('re_skill',['type'=>'ski']);
                    // orderby order
                    foreach($skis as $ski){
                        // id type pic color
                ?>
                <div>
                    <!-- <img src="../upload/<?=$ski['pic'];?>" alt=""> -->
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p><?=$ski['id'];?></p>
                </div>
                <?php
                    };
                ?>


<!-- 
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>JS</p>
                </div>
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>PHP</p>
                </div>
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>CSS</p>
                </div>
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>CSS</p>
                </div> -->

            </div>
        </article>
        <article>
            <h1 class="maintitle">expertize</h1>
            <div class="skitems d-flex flex-wrap">

                <?php
                    $skis=all('re_skill',['type'=>'ski']);
                    // orderby order
                    foreach($skis as $ski){
                        // id type pic color
                ?>
                <div>
                    <!-- <img src="../upload/<?=$ski['pic'];?>" alt=""> -->
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p><?=$ski['id'];?></p>
                </div>
                <?php
                    };
                ?>

<!--                 
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>HTML</p>
                </div>
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>JS</p>
                </div>
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>PHP</p>
                </div>
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>CSS</p>
                </div>
                <div>
                    <img src="https://fakeimg.pl/80x80" alt="">
                    <p>CSS</p>
                </div> -->

            </div>
        </article>
    </div>
    </section>