<?php
    $url=parse_url("mysql://bb1cf8553c6de0:fc8e4759@us-cdbr-iron-east-01.cleardb.net/heroku_eef9cc5c7c1bd23?reconnect=true");

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"],1);

    mysqli_connect($server, $username, $password);


    mysqli_select_db($db);
?>