<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 22.09.16
 * Time: 12:14
 */
session_start();
////////////////////////////////////////////////ROUTING//////////////////////////////////////////////


if( $_SERVER['REQUEST_URI'] != '/' ) {
    $urlArray = explode('/', $_SERVER['REQUEST_URI']);
    $urlArray = array_filter($urlArray);
    $action = $urlArray[1];
    if( isset($urlArray[2]) ) {
        $subAction = $urlArray[2];
    }
}else{
    $action=='home';
}


if($action=="main") {
    if (isset($_POST['form'])) {
        $array = $_POST['form'];
        $ifValid = validate($array);
        if ($ifValid == true) {
            write_file($array, FILE_DIRECTORY);
        }
    }

    $message = read_file(FILE_DIRECTORY);
    if (!empty($newMessage)) {
        $message = messageFormat($newMessage);
    }

}
/////////////////////////////////File upload////////////////////////////////////////////////////////////
if($action=="form2"){

    if (isset($_POST['name_file']) && isset($_FILES['file']) ) {
        if (!file_exists('file')) {
        mkdir('file');
    }
        $name = $_POST['name_file'];

        copy($_FILES['file']['tmp_name'], 'file/' .$name.uniqid());
        print_r($_FILES);
    }


////////////////////////////////////////////////Admin//////////////////////////////////////////////
    }elseif($action=="login.admin") {

        $admin_login=array('name'=>"dix",
                             'login'=>"euflfq");

//    var_dump($admin_login);
//    var_dump($user_login);

     $login=$_POST['login'];
//    var_dump($login);

//    if($admin_login['name']==$login['user_name']){
//        var_dump($login['user_name']);
//    }
//
          if($admin_login['name']==$login['user_name'] &&
              $admin_login['login']==$login[user_password]){
             // echo'valid admin';
              $_SESSION['user_admin']=1;
              $action="home";

              if(isset($_POST['remember_me'])){
                  //echo'1';
                  setcookie((string)$login['user_name'],(string)$login['user_password'],time() + 5*3600, "/");
              }

          }else{
             // echo"you are not admin";
              $_SESSION['user_admin']=0;
              $action='login.admin';
         }


}else{
    header("HTTP/1.1 404 Not Found");
}

include'main.view.php';