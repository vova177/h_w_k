<?php

function get_all_category($db){
    $sql="SELECT * FROM categories";
    $select=$db->query($sql);
   return $select->fetchAll();
}