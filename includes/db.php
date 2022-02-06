<?php
        // local server
    // $db['db_host'] = "localhost";
    // $db['db_user'] = "root";
    // $db['db_password'] = "";
    // $db['db_name'] = "black_office";

//    000webhost
    // db =  id15007727_blackoffice
    // user = TemamHashim
    //  pass = pZm#hC1Dv98BG4<f
     // cloud server
    $db['db_host'] = "databases.000webhost.com";
    $db['db_user'] = "id15007727_temamhashim";
    $db['db_password'] = "4IWzqwYcRma&k-ki";
    $db['db_name'] = "id15007727_blackoffice";

    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }
    $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  ?>
