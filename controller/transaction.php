<?php
if($action="transaction" && isset($_GET['balance_id'])){
    $all_transaction=get_transactions_byID($db, $_GET['balance_id']);
  if(isset($_POST['form'])){
     $category_id=get_categoryID($db, $_POST['form']['category_name']);
      if(isset($category_id)) {
          $_POST['form']['account_id']=$_GET['balance_id'];
          $_POST['form']['category_id'] = $category_id[0]['id'];
          $_POST['form']['created_at'] = date('Y-m-d H:i:s');
          add_transaction($db,$_POST['form']);
          $all_transaction=get_transactions_byID($db, $_GET['balance_id']);
      }
  }
    view('transaction', $all_transaction);
}