<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 25.09.16
 * Time: 12:48
 */


$routs=[
    'view',
    'admin',
    'login',
    'form2',
];

if( $_SERVER['REQUEST_URI'] != '/' ) {
    $urlArray = explode('/', $_SERVER['REQUEST_URI']);
    $urlArray = array_filter($urlArray);
    $action = $urlArray[1];
    if (isset($urlArray[2])) {
        $subAction = $urlArray[2];
    } else {
        header("HTTP/1.1 404 Not Found");
    }

    if (!in_array($action, $routs)) {
        $action = null;
        $subAction = null;
    }
    } else {
        $action = 'view';
    }
    if ($action == 'admin') {
        if ($_SESSION['user_admin'] != 1) {
            header('location: /login');
            exit();
        }
    }