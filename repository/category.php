<?php
function get_categoryID($db, $string){
    $select=$db->query("SELECT `id` FROM `categories` WHERE  `name`='{$string}'");
    $category_id=$select->fetchAll();
    return $category_id;
}
function get_all_category($db){
    $select=$db->query("SELECT * FROM `categories`");
    $category=$select->fetchAll();
    return $category;
}