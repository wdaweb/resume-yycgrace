<?php
    // include_once "../com/base.php";
    $table='re_info_poma';
    $col='text';
?>


<section class="info">
    <div class="container">
        <h1 class="maintitle chginput infochginput" id="info_name"><?=info($table,'info_name',$col);?></h1>
        <div><textarea style="display:none" class="ta"><?=info($table,'info_name',$col);?></textarea></div>
        <div class="infotop flex-column py-5">
            <div class="d-flex flex-row">
                <div class="mr-4">
                    <button id="mypicbtn" style="display:none;">change</button>
                    <div id="mypic" class="mypic"><img width="150px" height="150px" src="https://fakeimg.pl/300x300" alt=""></div>
                </div>
                <div class="py-4 pr-2">
                    <h5 class="chginput infochginput" id="info_title"><?=info($table,'info_title',$col);?></h5>
                    <div><textarea style="display:none" class="ta"><?=info($table,'info_title',$col);?></textarea></div>
                    <p class="chginput infochginput" id="info_city"><?=info($table,'info_city',$col);?></p>
                    <div><textarea style="display:none" class="ta"><?=info($table,'info_city',$col);?></textarea></div>
                </div>
            </div>
            <div class="pr-5 py-4">
                <p class="chginput infochginput" id="info_about"><?=info($table,'info_about',$col);?></p>
                <div><textarea style="display:none" class="ta"><?=info($table,'info_about',$col);?></textarea></div>
            </div>
        </div>
    </div>
    </section>

