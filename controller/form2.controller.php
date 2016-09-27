<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 24.09.16
 * Time: 16:07
 */

if($action=="form2") {

    if (isset($_POST['message']) && isset($_FILES['file'])) {

        $message = $_POST['message'];

        $file_extension=pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);


        $file_data=uniqid().'.'.$file_extension;
        $file_patch='file/'.$file_data;
        copy($_FILES['file']['tmp_name'], $file_patch);
        $message_form=['message'=>$message, 'file_ini'=>$file_data];
        write_file($message_form,FILE_DIRECTORY_FILE_UPLOAD);
    }
    $data=read_file(FILE_DIRECTORY_FILE_UPLOAD);
    //echo$data;
    view('form2', ['data' => $data]);
    exit();
}