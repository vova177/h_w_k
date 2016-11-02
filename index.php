<?php
session_start();
include 'connect_db.php';
ini_set('display_errors',1);
error_reporting(E_ALL);
include 'repository.php';
include'check_user.php';
define("FILE_DIRECTORY_MESSAGE",'database/file.txt');
define("FILE_DIRECTORY_FILE_UPLOAD",'database/form2.txt');
include'function.php';
include 'routing.php';
include 'controller.php';