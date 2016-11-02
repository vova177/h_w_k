<?php
    if(isset($data)){
      echo '<br>Name:'.$data['user_name'];
        echo '<br><a href="/balance">Balance</a> status:'.$data['balance_status'];
    }