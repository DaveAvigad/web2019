<?php
    // Create a mySQL DB connection
    $dbhost = "182.50.133.51";
    $dbuser = "studDB19A";
    $dbpass = "stud19aDB1!";
    $dbname = "studDB19A";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // Testing connection success
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }

    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQL+PHP</title>
</head>
<body>
    <?php
    echo '<h1>You are successfully connected to </h1>' . $dbname;

    $query = "SELECT * FROM tbl_test";
    $result = mysqli_query($connection, $query);

    if(!$result) die('DB Query failed!');

    echo '<ul>';
    while($row = mysqli_fetch_assoc($result)){
        echo '<li><h3 onclick="changeColor()">' . $row['title']. '</h3>';
        echo '<p>' . $row['txt'] . '</p>';
    }
    echo '</ul>';

    // release return data
    mysqli_free_result($result);
    // close the connection
    mysqli_close($connection);
    ?>
</body>
</html>
