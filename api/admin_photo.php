<?php

// print_r($_FILES);


if(isset($_POST)){
    print_r($_FILES);

    $file=$_FILES['pic'];

    $fileName=$_FILES['pic']['name'];
    $fileTmpName=$_FILES['pic']['tmp_name'];
    $fileSize=$_FILES['pic']['size'];
    $fileError=$_FILES['pic']['error'];
    $fileType=$_FILES['pic']['type'];

    $fileExt = strtolower(end(explode('.',$fileName)));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileExt,$allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid('',ture).".".$fileExt;
                $fileDest = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDest);
            }else{
                echo "there was an error! file is too big!";
            }
        }else{
            echo "there was error!";
        }
    }else{
        echo "there was an error! Only jpg/jpeg/png!";
    }

}


// $_POST['id']=photo 1/2/3



?>