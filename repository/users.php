<?php
function login_user($db, $data){
    $select = $db->query("SELECT * FROM `users` WHERE `name`='{$data['name']}'  AND `password`='{$data['password']}'");
    $repeat_users = $select->fetchAll();
    return $repeat_users;
}
function get_user_byID($db, $id){
    $select=$db->query("SELECT `name` FROM `users` WHERE `id`='{$id}'");
    $need_user=$select->fetchAll();
    return $need_user[0]['name'];
}
function get_usersAccount_buID($db, $user_id){
    $select=$db->query("SELECT `account_id` FROM `users_accounts` WHERE `user_id`='{$user_id}'");
    $need_account=$select->fetchAll();
    return $need_account;
}