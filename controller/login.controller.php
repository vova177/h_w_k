<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 25.09.16
 * Time: 20:04
 */

if($action=="login") {

    $login = isset($_POST['user_name']) ? $_POST['user_name'] : null;
    $password = isset($_POST['user_password']) ? $_POST['user_password'] : null;
    $remember_me = isset($_POST['remember_me']) ? $_POST['remember_me'] : null;


    if($login && $password){

        if($login===$config['login_Admin'] && sha1($password.$config['key']===$config['password'])){

            $_SESSION['user_admin']=1;

            if ($remember_me) {
                $cookie=$config['login_Admin'].$config['password'].$config['key'];
                setcookie('user',sha1($cookie), time() + 5 * 3600, "/");
            }

            header('location: /admin');
            exit();
        }
    }
    view('login');
}