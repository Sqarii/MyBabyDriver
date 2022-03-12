<?php
include "connect.php";

    date_default_timezone_set("Europe/Warsaw");

    if(isset($_POST['submit']) && file_exists("../rating.php")){
        
        if(empty($_POST['nick'])){
            $_POST['nick'] = 'anonymous';
        }

        $driver_id = $_POST['driver_id'];
        $rate = $_POST['rate'];
        $note = $_POST['note'];
        $nick = $_POST['nick'];
        $date = date("Y-m-d") . " " . date("H:i:sa");


        $query = "INSERT INTO rates (driver_id, nick, rate, note, date) VALUES ('$driver_id', '$nick', '$rate', '$note', '$date')";

        if (!mysqli_query($conn, $query)) {

            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
        header("location: ../index.php");
    }
?>