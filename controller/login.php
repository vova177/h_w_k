<?php
if($action=="login") {
    if(isset($_POST['form']) && !in_array(null, $_POST['form'])){
        $login_user=login_user($db, $_POST['form']);
        if($login_user){
            if(isset($_POST['remember_me'])){
                $_SESSION['user'] = $login_user[0]['id'];
                $cookie = $login_user[0]['id'];
                setcookie('user_id', md5($cookie), time() + 2 * 3600);
            }else {
                $_SESSION['user'] = $login_user[0]['id'];
                header('location: /account');
                exit();
            }
        }
        }
    view('login');
}