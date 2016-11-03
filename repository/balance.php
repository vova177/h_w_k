<?php
function get_accounts($db, $count_id){
$select=$db->query("SELECT * FROM `acounts` WHERE id='{$count_id}'");
    $select_count=$select->fetchAll();
    return $select_count;
}
function add_new_balance($db, $data){
    $select=$db->query("SELECT * FROM `acounts` WHERE `guid`='{$data['guid']}' AND `description`='{$data['description']}'");
    $repeat=$select->fetchAll();
    if($repeat) {
        $insert = $db->prepare("INSERT INTO acounts(`guid`, `description`) VALUES (:guid, :description)");
        $insert->execute(array('guid' => $data['guid'], 'description' => $data['description']));
        return 1;
    }else{
        return 0;
    }
}
function need_account_ID($db, $description){
    $select=$db->query("SELECT `id` FROM `acounts` WHERE `description`='{$description}'");
    $id=$select->fetchAll();
    return $id;
}
function add_new_accountTO_user($db, $account_id, $user_id){
    $insert=$db->prepare("INSERT INTO users_accounts(`account_id`, `user_id`) VALUES(:account_id, :user_id)");
    $insert->execute(array('account_id'=>$account_id, 'user_id'=>$user_id));
}