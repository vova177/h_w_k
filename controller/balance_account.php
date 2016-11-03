<?php
if($action=="balance"){
    $arr_balance_id=get_usersAccount_buID($db,$_SESSION['user']);
    foreach ($arr_balance_id as $balance_id) {
        $arr_balance[]=get_accounts($db, $balance_id['account_id']);
    }
    if(isset($_POST['description'])){
        $data['description']=$_POST['description'];
        $data['guid']=time();
        add_new_balance($db, $data);
        $account_id=need_account_ID($db, $data['description']);
        add_new_accountTO_user($db, $account_id[0]['id'], $_SESSION['user']);
    }
    view('balance', $arr_balance);
}