<?php
    include "php/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>MyBabyDriver</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <h1>My Baby Driver</h1>

    <div id="search-box">
        <input type="text" placeholder="Search..." id="search-input" value="">
        <div id="search-hints" style="display: none; border: solid 1px black">

            <?php

                $query = "SELECT first_name, last_name, driver_id FROM drivers";

                $result = mysqli_query($conn, $query);
                
                while($drivers = mysqli_fetch_assoc($result)){
                    
                    echo "<a class='a' href=profile.php?driver=".$drivers['driver_id'].">";
                    echo $drivers['first_name'] . ' ' . $drivers['last_name'];
                    echo "</a>";
                }

                
                function ranking($conn){

                    $sql1 = "SELECT first_name, last_name, driver_id FROM drivers";
                    $result1 = mysqli_query($conn, $sql1);

                    while($row = mysqli_fetch_assoc($result1)){
                        $id = $row['driver_id'];
                        $name = $row['first_name'] . " " . $row['last_name'];
                        
                        $sql2 = "SELECT ROUND(AVG(rate),1) AS avgRate, driver_id FROM rates WHERE driver_id =" . $id;
                        $result2 = mysqli_query($conn, $sql2);
                        
                        while($row = mysqli_fetch_assoc($result2)){
                            $avg = $row['avgRate'];
                        }
                        
                        $driverRank[$name] = $avg;
                    }

                    arsort($driverRank);

                    foreach(array_slice($driverRank, 0, 10) as $driver => $rate){
                        
                        echo $driver . " " . $rate . "<br>";
                    }
                }

                ?>
            
        </div>
    </div>
    <div id="driver-ranking">
        <h2>Top 10 Drivers</h2>
        <?php

            ranking($conn);

            $conn -> close();
        ?>
    </div>

    <!-- <footer>

    </footer> -->

    <script src="js/main.js"></script>
</body>
</html>