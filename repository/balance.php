<?php
function get_accounts($db, $count_id){
$select=$db->query("SELECT * FROM `acounts` WHERE id='{$count_id}'");
    $select_count=$select->fetchAll();
    return $select_count;
}