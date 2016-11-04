<?php
if($action=="account" && isset($_SESSION['user'])) {
 if(isset($_POST['transaction']) &&!in_array(null, $_POST['transaction'])) {
     add_transaction($db, $_POST['transaction']);
 }
 if(isset($_POST['new_account'])){
     $data["description"]=$_POST['new_account'];
     $data["guid"]=uniqid();
     $data['user_id']=$_SESSION['user'];
       add_new_user_account($db, $data);
 }
    $data['accounts']=get_users_accounts($db, $_SESSION['user']);
    $data['transactions']=get_user_transactions($db, $_SESSION['user']);
    $data['category']=get_all_category($db);
    $data['user_name']=get_user_name($db, $_SESSION['user']);
    view('account', $data);
}



