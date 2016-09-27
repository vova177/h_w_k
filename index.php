<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 21.09.16
 * Time: 17:39
 */
session_start();

//config site

include'config.php';
//include"teamPlates/header.php";

include'check_user.php';

define("FILE_DIRECTORY_MESSAGE",'database/file.txt');
define("FILE_DIRECTORY_FILE_UPLOAD",'database/form2.txt');

include'function.php';

include 'routing.php';

include'control.php';

