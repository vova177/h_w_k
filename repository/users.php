<?php
function login_user($db, $data){
    $select = $db->query("SELECT * FROM `users` WHERE `name`='{$data['name']}'  AND `password`='{$data['password']}'");
    $repeat_users = $select->fetchAll();
    return $repeat_users;
}
function get_user_name($db, $id){
    $select=$db->query("SELECT `name` FROM `users` WHERE `id`='{$id}'");
    $need_user=$select->fetchAll();
    return $need_user[0]['name'];
}
