<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 22.09.16
 * Time: 18:04
 */

if($action=="login.admin"){
    include'teamPlates/login.admin.php';
}
  if($_SESSION[user_admin]==1) {
      include 'teamPlates/header.php';
      if ($action == 'home') {
          include 'teamPlates/home_page.php';
      }
      if ($action == "main") {
          include 'teamPlates/view.php';
      }
      if ($action == "form2") {
          include 'teamPlates/form2.php';
      }
      include 'admin/admin.php';
  }