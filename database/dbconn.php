<?php

    $conn = mysqli_connect("remotemysql.com","Zf2eceTt9a","xJSVwKBzun","Zf2eceTt9a");

    $conn = mysqli_connect("localhost","root","","ssip");

    $from = 'jil1710.jp@gmail.com';
    if(!$conn)
    {
        die("Connection to server is not established !");
    }
?>
