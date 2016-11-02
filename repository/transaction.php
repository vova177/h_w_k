<?php
function add_transaction($db, $data){
    $insert=$db->prepare("INSERT INTO transactions(`account_id`, `category_id`, `price`, `descriptions`, `created_at`)
                     VALUES (:account_id, :category_id, :price, :descriptions, :created_at)");
   $insert->execute(array('account_id'=>$data['account_id'], 'category_id'=>$data['category_id'], 'price'=>$data['price'],
                                   'descriptions'=>$data['descriptions'], 'created_at'=>$data['created_at']));
}
function get_transactions_byID($db, $balance_id){
    $select=$db->query("SELECT * FROM `transactions` WHERE `account_id`='{$balance_id}'");
    $arr=$select->fetchAll();
    return $arr;
}
function get_all_transactions($db){
    $select=$db->query("SELECT * FROM `transactions`");
    $arr=$select->fetchAll();
    return $arr;
}