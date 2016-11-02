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

include 'controller/login.php';
include 'controller/user_account.php';
include 'controller/balance_account.php';
include 'controller/transaction.php';
