<?php
function get_users_accounts($db, $id){
    $sql=("SELECT  ac.description, ac.id, ac.guid FROM `users_accounts` as ua 
            LEFT JOIN `users` as u ON ua.user_id=u.id
            LEFT JOIN `acounts` as ac ON ua.account_id=ac.id
            WHERE u.id='{$id}'");
    $select=$db->query("$sql");
    return $accounts=$select->fetchAll();
}
function add_new_user_account($db, $data){
    $sql1="INSERT INTO acounts(`guid`, `description`) VALUES('{$data['guid']}', '{$data['description']}')";
    $insert1 = $db->prepare($sql1);
    $insert1->execute();
    $accountID=$db->lastInsertId();
    $sql2="INSERT INTO users_accounts(`account_id`, `user_id`) VALUES('{$accountID}', '{$data['user_id']}')";
    $insert2=$db->prepare($sql2);
    $insert2->execute();
}
