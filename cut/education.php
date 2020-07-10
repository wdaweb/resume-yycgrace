<?php
    // include_once "../com/base.php";    
?>


<section class="edu">
    <div class="container">
        <h1 class="maintitle">Education</h1>

        <?php
            $edus=all('re_exp_edu',['type'=>'edu']);
            // orderby year
            foreach($edus as $edu){
        ?>
        <div class="edublock mb-4 d-flex flex-row">
            <div class="timeline d-flex flex-column align-items-center pr-3">
                <p class="chginput expchginput text-secondary" id="<?=$edu['id'];?>_year"><?=$edu['year'];?></p>
                <div><textarea style="display:none" class="ta"><?=$edu['year'];?></textarea></div>
                <i class="far fa-circle text-secondary small"></i>
                <div class="line bg-secondary"></div>
            </div>
            <div class="pt-4">
                <h5 class="py-2"><?=$edu['id'];?></h5>
                <span><?=$edu['period'];?></span><span><?=$edu['title'];?></span><br>
                <span><span><?=$edu['event'];?></span></span>
            </div>
        </div>
        <?php
            };
        ?>

        <a class="btn btn-outline-secondary" id="login">admin</a>

    </div>

    </section>
