<?php
    include_once "../com/base.php";

if(isset($_POST)){
    if($_POST['acc']!="yyc" || $_POST['pw'] != "1234" ){
        to("../login.html");
    }
};


/*
include_once "/base.php";

// 與首頁完全相同,使用撈資料的方式
// 但使用js先預視結果,再存入資料庫
// 純文字與圖片資料表是固定id,寫死在base裡面

$infoPomainTable;
$skillTable;
$expEduTable;
$pofoTable;

// INFO:
$info_name = find($infoPomainTable,["id"="info_name"]);
$info_title = find($infoPomainTable,["id"="info_title"]);
$info_city = find($infoPomainTable,["id"="info_city"]);
$info_about = find($infoPomainTable,["id"="info_about"]);

$info_pic1 = find($infoPomainTable,["id"="info_pic1"]);
$info_pic2 = find($infoPomainTable,["id"="info_pic2"]);
$info_pic3 = find($infoPomainTable,["id"="info_pic3"]);
$info_pic4 = find($infoPomainTable,["id"="info_pic4"]);
$info_pic5 = find($infoPomainTable,["id"="info_pic5"]);



// SKILL:
$ski = all($skillTable,["type"="ski"]);
// where type==ski
// order by order
$expe = all($skillTable,["type"="expe"]);
// where type==expe
// order by order
$ski_name = $ski[0];
$ski_pic = $ski[2];
$ski_color = $ski[3];

$expe_name = $expe[0];
$expe_pic = $expe[2];
$expe_color = $expe[3];



// EXP:
$exp = all($expEduTable,["type"="exp"]);
// where type == exp
// order by year
$exp_name = $exp[0];
$exp_year = $exp[2];
$exp_period = $exp[3];
$exp_title = $exp[4];
$exp_event = $exp[5];

// EDU:
$edu = all($expEduTable,["type"="edu"]);
// where type == edu
// order by year
$edu_name = $edu[0];
$edu_year = $edu[2];
$edu_period = $edu[3];
$edu_title = $edu[4];
$edu_event = $edu[5];


// POMAIN:
$pomain_svg = find($infoPomainTable,["id"="pomain_svg"]);


// PORTFOLIO:
$pofo = all($pofoTable);
// where type == 1or2or3
// order by order
$pofo_title = $pofo[2];
$pofo_url = $pofo[3];
$pofo_pic = $pofo[4];
$pofo_content = $pofo[5];
// (技能比例bar)

*/

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../com/bootstrap.css">
    <link rel="stylesheet" href="../com/css.css">
    <script src="https://kit.fontawesome.com/9661638eaf.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        form {
            width: 500px;
            background: #eee;
            padding: 20px;
            margin-left: 50px;
            margin-bottom: 50px;
        }

        label {
            display: block;
        }
    </style>

</head>

<body>


    <!-- navbar -->

    <!-- ajax跑資料輸入? -->


    <nav class="nav nav-tabs justify-content-around">
        <a href="#info" class="show-sm active" data-toggle="tab">info</a>
        <a href="#skill" class="show-sm" data-toggle="tab">skill</a>
        <a href="#exp" class="show-sm" data-toggle="tab">exp</a>
        <a href="#edu" class="show-sm" data-toggle="tab">edu</a>
        <a href="#pofo" class="show-sm" data-toggle="tab">portfolio</a>
    </nav>


    <div class="tab-content">

        <!-- 首頁info關於我 -->
        <div id="info" class="tab-pane fade show active">

    <?php
        include_once "../cut/info.php";
        // 撈大頭照陣列 
    ?>
            <!-- 更換大頭照的彈出視窗 -->
            <div class="" id="picdialog" style="display: none;">
                <form action="../api/admin_photo.php" method="post" enctype="multipart/form-data">
                <h4>更換大頭照</h4>
                <p>一次只能顯示一張，一次只能更換一張</p>
                    <!-- 顯示五張照片圈圈(未上傳的用新增+灰照片取代) -->
                    <div class="d-flex flex-row">
                        <label for="pic1" class="p-3 text-center">
                            <input type="radio" name="show" value="photo1">顯示這張
                            <div><img src="https://picsum.photos/80/80/?random=1" alt=""></div>
                            <input type="radio" name="chg" value="photo1">更換照片
                        </label>
                        <label for="pic2" class="p-3 text-center">
                            <input type="radio" name="show" value="photo2">顯示這張
                            <div><img src="https://picsum.photos/80/80/?random=1" alt=""></div>
                            <input type="radio" name="chg" value="photo2">更換照片
                        </label>
                        <label for="pic3" class="p-3 text-center">
                            <input type="radio" name="show" value="photo3">顯示這張
                            <div><img src="https://picsum.photos/80/80/?random=1" alt=""></div>
                            <input type="radio" name="chg" value="photo3">更換照片
                        </label>
                        <label for="pic4" class="p-3 text-center">
                            <input type="radio" name="show" value="photo4">顯示這張
                            <div><img src="https://picsum.photos/80/80/?random=1" alt=""></div>
                            <input type="radio" name="chg" value="photo4">更換照片
                        </label>
                        <label for="pic5" class="p-3 text-center">
                            <input type="radio" name="show" value="photo5">顯示這張
                            <div><img src="https://picsum.photos/80/80/?random=1" alt=""></div>
                            <input type="radio" name="chg" value="photo5">更換照片
                        </label>
                    </div>

                    <p>選擇要更換的照片</p>
                    <input type="file" name="pic" id="">

                    <input type="submit" value="確認修改">
                </form>
            </div>


        </div>



        <!-- SKILL 專業訓練或證照:Professional Training -->
        <div id="skill" class="tab-pane fade">

            <?php
        include_once "../cut/skill.php";
    ?>

            <div id="skildialog">
                <form action="">

                </form>
            </div>






        </div>


        <!-- 經歷:exp -->
        <div id="exp" class="tab-pane fade">

            <?php
        include_once "../cut/experince.php";
    ?>

        </div>




        <!-- 學歷:edu -->
        <div id="edu" class="tab-pane fade">

            <?php
        include_once "../cut/education.php";
    ?>

        </div>




        <!-- 作品集上傳區 -->
        <div id="pofo" class="tab-pane fade">

            <?php
        include_once "../cut/pomain.php";
    ?>

            <?php
        include_once "./admin_portfolio.php";
    ?>

        </div>


    </div>

    <script>
    $("section").css("min-height", "auto");


// 即時修改文字輸入框
        $('.chginput').css("cursor", "pointer").on("click",function(){
            let id = $(this).attr('id');
            edit(id);
        });




        // click edit btn function
        // all btn toggle效果
        // let id = "info_name"
        function edit(id) {
            // let $id = $(this).attr('id');
            let $inputText = $('#' + id).html()
            let $inputW = $('#' + id).width()
            let $inputH = $('#' + id).height()
            $('#' + id).next().children('.ta').after('<button id="s">save</button><button id="c">cancel</button>')
            $('#' + id).hide()
            $('#' + id).next().children('.ta').val($inputText).css({
                "width": $inputW + "px",
                "height": $inputH + "px",
                "background-color": "transparent",
                "border": "transparent",
                "border-bottom": "1px solid gray",
                "overflow": "hidden"
            }).show()

            $('#' + id).next().children('#s,#c').css({
                "font-size": "0.5rem"
            })

            // 點'save儲存修改'或'cancel取消修改'
            //  save點擊後,跳出確認視窗
            $('#s').click(function () {
                $editInput = $('#' + id).next().children('.ta').val();

                // for 資料表 re_info_poma
                if($('#' + id).hasClass("infochginput")){
                    $data = {
                        id: id,
                        infoPomainText: $editInput
                    }
                }
                // for 資料表 re_exp_edu
                if($('#' + id).hasClass("expchginput")){
                    let res = id.split("_");
                    $data = {
                        id: res[0],
                        col: res[1],
                        expEduText: $editInput
                    }
                }


                $.post("../api/admin_chginput.php", $data, function (data) {
                    $('#' + id).show().html(data)
                    $('#' + id).next().children('.ta').val(data).hide()
                })
                $('#' + id).next().children('#s,#c').remove()
            });
            $('#c').click(() => { 
                $('#' + id).show()
                $('#' + id).next().children('.ta').val($inputText).hide()

                $('#' + id).next().children('#s,#c').remove()
            });
            // btm remove bug: 如何只消掉自己的btn
            // $('.chginput').css("cursor", "pointer").on("click",goedit());
            // btn硬寫css浮起來在輸入框旁邊
            // 看btn跟div的關係能不能把div當背景灰階
        }

// info修改大頭照
        // $('.mypic').on("moseover",function(){
        //     $(this).css({
        //         "cursor": "pointer"
        //         // "shadow":"",
        //         // "animation":""
        //     })
            // $($this).pre().show().on("click",function(){
            //     $('#picdialog').show()
            // })
        // });
        $('#mypic').css("cursor","pointer").hover(function(){
            $(this).prev('button').toggle()
        }).on("click",function(){
                $('#picdialog').toggle()
            })


// skill彈出視窗修改


    </script>



</body>

</html>