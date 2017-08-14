<?php
    $host = "127.0.0.1";
    $user = "mukku";
    $pass = "";
    $db = "takumi";
     
    $conn = mysqli_connect($host, $user, $pass, $db)or die("Database connection failed: " . mysqli_connect_error());
?>