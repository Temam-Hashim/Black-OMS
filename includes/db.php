<?php
        // local server
    // $db['db_host'] = "localhost";
    // $db['db_user'] = "root";
    // $db['db_password'] = "";
    // $db['db_name'] = "black_office";


     // cloud server
    $db['db_host'] = "sql6.freemysqlhosting.net";
    $db['db_user'] = "sql6470805";
    $db['db_password'] = "Sf1BTIGTRC";
    $db['db_name'] = "sql6470805";

    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }
    $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  ?>
