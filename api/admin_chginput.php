<?php
include "../com/base.php";
// $infoPomainTable;
// $skillTable;
// $expEduTable;
// $pofoTable;

// <!-- 接admin資料

if(isset($_POST['infoPomainText'])){
    save('re_info_poma',['id'=>$_POST['id'],'text'=>$_POST['infoPomainText']]);
    $res=info('re_info_poma',$_POST['id'],'text');
    echo $res;
    // print_r($_POST['text']);
}

if(isset($_POST['expEduText'])){
    save('re_exp_edu',['id'=>$_POST['id'],$_POST['col']=>$_POST['expEduText']]);
    $res=info('re_exp_edu',$_POST['id'],$_POST['col']);
    echo $res;
    // print_r($_POST['text']);
}


// if(isset($_POST['skill'])){}

// if(isset($_POST['ExpEdu'])){}

// if(isset($_POST['pofolio'])){}
// echo $_POST['infoPomainText'];




?>

