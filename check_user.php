<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 25.09.16
 * Time: 14:26
 */


if($_COOKIE['user']){
    $adminCookie = $config['login_Admin'].$config['password'].$config['key'];
    if( $_COOKIE['user'] === sha1($adminCookie) )
        $_SESSION['user_admin'] = 1;
}
