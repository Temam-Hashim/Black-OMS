<?php
        //local server
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_password'] = "";
    $db['db_name'] = "black_office";
    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }

    $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

?>
