<?php
function add_transaction($db, $data){
    $data['created_at']=date('Y-m-d H:i:s');
    $insert=$db->prepare("INSERT INTO transactions(`account_id`, `category_id`, `price`, `tr_name`, `created_at`)
                     VALUES (:account_id, :category_id, :price, :tr_name, :created_at)");
   $insert->execute(array('account_id'=>$data['account_id'], 'category_id'=>$data['category_id'], 'price'=>$data['price'],
                                   'tr_name'=>$data['name'], 'created_at'=>$data['created_at']));
}
function get_user_transactions($db, $id){
    $sql="SELECT ac.description, ac.guid, cat.name, tr.price, tr.created_at, tr.tr_name FROM `users_accounts` as ua
          LEFT JOIN `users` as u ON ua.user_id=u.id
          LEFT JOIN `acounts` as ac ON ua.account_id=ac.id
          LEFT JOIN `transactions` as tr ON ac.id=tr.account_id
          LEFT JOIN `categories` as cat ON tr.category_id=cat.id
             WHERE u.id='{$id}'";
    $select=$db->query($sql);
    $arr=$select->fetchAll();
    return $arr;
}