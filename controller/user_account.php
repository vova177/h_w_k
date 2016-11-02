<?php
if($action=="account" && isset($_SESSION['user'])) {
    $home_data['user_name']=get_user_byID($db,$_SESSION['user']);
    $transaction=get_all_transactions($db);
    $home_data['balance_status']=0;
     foreach($transaction as $value){
         $home_data['balance_status']+=$value['price'];
     }
    view('user_account', $home_data);
}



