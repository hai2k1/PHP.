<?php

use function PHPSTORM_META\type;

$file_path = 'upload' . $_FILES['upload-file']["name"];
    $flag_ok = true;
    //thêm file vào forder
    //move_uploaded_file($_FILES['upload-file']["tmp_name"],'uploads/'.$_FILES['upload-file']["name"]);

    //kiểm tra type của file
    $file_type = strtolower(pathinfo($file_path,PATHINFO_EXTENSION));
    $tyle_files = array('jpg','gif','png','jpeg');
    if(in_array($file_type,$tyle_files)){
        echo $file_type;
    }
    else{
        echo "không phải file ảnh";
    }
    //
?>