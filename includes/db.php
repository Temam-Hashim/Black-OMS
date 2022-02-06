<?php
        //local server
    // $db['db_host'] = "localhost";
    // $db['db_user'] = "root";
    // $db['db_password'] = "";
    // $db['db_name'] = "black_office";
    // cloud server 
    $db['db_host'] = "sql209.epizy.com";
    $db['db_user'] = "epiz_28434227";
    $db['db_password'] = "7VkVvVtgUZ";
    $db['db_name'] = "epiz_28434227_black";

    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }

    $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

?>
