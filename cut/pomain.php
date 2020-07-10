<?php
    // include_once "../com/base.php";
    $table='re_info_poma';
    $col='text';
?>


<section class="col-12" id="topinfo">
        <h1>PORTFOLIO</h1>

        <div class="infotop flex-column py-5">
            <div class="d-flex flex-row">
                <div class="py-4 pr-2">
                    <h5 class="chginput infochginput" id="pomain_1"><?=info($table,'pomain_1',$col);?></h5>
                    <div><textarea style="display:none" class="ta"><?=info($table,'pomain_1',$col);?></textarea></div>
                    <p class="chginput infochginput" id="pomain_2"><?=info($table,'pomain_2',$col);?></p>
                    <div><textarea style="display:none" class="ta"><?=info($table,'pomain_2',$col);?></textarea></div>
                </div>
            </div>
            <div class="pr-5 py-4">
                <p class="chginput infochginput" id="pomain_3"><?=info($table,'pomain_3',$col);?></p>
                <div><textarea style="display:none" class="ta"><?=info($table,'pomain_3',$col);?></textarea></div>
            </div>
        </div>

</section>