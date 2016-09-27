<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 24.09.16
 * Time: 16:07
 */


if($action=="view") {
    if (isset($_POST['form'])) {
        $array = $_POST['form'];
        $ifValid = validate($array);
        if ($ifValid == true) {
            write_file($array, FILE_DIRECTORY_MESSAGE);
        }
    }

    $message = read_file(FILE_DIRECTORY_MESSAGE);
    if (!empty($newMessage)) {
        $message = messageFormat($newMessage);
    }
    view('view', ['message' => $message]);
}



