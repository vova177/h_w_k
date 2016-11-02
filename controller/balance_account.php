<?php
if($action=="balance"){
    $arr_balance_id=get_usersAccount_buID($db,$_SESSION['user']);
    foreach ($arr_balance_id as $balance_id) {
        $arr_balance[]=get_accounts($db, $balance_id['account_id']);
    }
    view('balance', $arr_balance);
}