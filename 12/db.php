<?php
    // Create a mySQL DB connection
    $dbhost = "***.50.133.168";
    $dbuser = "****DB19a";
    $dbpass = "****19DB1!";
    $dbname = "****DB19a";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // Testing connection success
    if(mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
