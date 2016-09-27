<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 22.09.16
 * Time: 12:14
 */

if(!$action){
    header('HTTP/ 1.1 404 Not Fond');
    include "teamPlates/view.404.php";
}

include 'controller/main.controller.php';
include 'controller/form2.controller.php';
include 'controller/admin.controller.php';
include 'controller/login.controller.php';