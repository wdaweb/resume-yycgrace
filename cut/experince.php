<?php
    // include_once "../com/base.php";
?>

<section class="exp">
    <div class="container">
        <h1 class="maintitle">Experience</h1>
        <div class="d-flex flex-column flex-md-wrap" id="exppppp">
                
        <?php
            $exps=all('re_exp_edu',['type'=>'exp']);
            // orderby year
            foreach($exps as $exp){
        ?>

                <div class="expblock mb-4 pr-5 d-flex flex-row">
                    <div class="timeline d-flex flex-column align-items-center pr-3">
                        <p class="text-secondary"><?=$exp['year'];?></p>
                        <i class="far fa-circle text-secondary small"></i>
                        <div class="line bg-secondary"></div>
                    </div>
                    <div class="pt-4">
                        <h5 class="py-2"><?=$exp['title'];?></h5>
                        <p><?=$exp['id'];?><br><?=$exp['period'];?></p>
                        <p><?=$exp['event'];?></p>
                    </div>
                </div>

        <?php
            };
        ?>


        </div>
    </div>
    </section>