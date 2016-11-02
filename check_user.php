<?php
if(isset($_COOKIE['user']) && empty($_SESSION['user'])){
     $login_user=get_user_byID($db, md5($_COOKIE['user']));
    if($login_user){
        $_SESSION['user']=$login_user[0]['id'];
    }
}
