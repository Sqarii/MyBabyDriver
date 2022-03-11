<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "mybabydriver";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<script>console.log('Database connected successfully')</script>";
    

?>