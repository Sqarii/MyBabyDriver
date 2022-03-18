<?php include "php/connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
    </head>
    <body>

        <?php
            
            $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            $url_par = parse_url($url);

            parse_str($url_par['query'], $url_id);

            $sql = "SELECT * FROM drivers WHERE driver_id =" . $url_id['driver'];

            $result = $conn->query($sql);

            while($row = mysqli_fetch_assoc($result)){

                // echo "Name: " . $row['first_name'] . " " . $row['last_name'];

                $name = $row['first_name'] . " " . $row['last_name'];

                $des = $row['description'];

                $id = $row['driver_id'];
            }

            $sql2 = "SELECT rate FROM rates WHERE driver_id =" . $url_id['driver'];

            $result2 = $conn->query($sql2);

            $rates= [];

            $counter = 0;
            while($row2 = mysqli_fetch_assoc($result2)){
                $rates[] = $row2['rate'];
                $counter++;
            }

            function average($rates){
                for($i=0; $i < count($rates); $i++){ 
                    $rates[$i] = intval($rates[$i]);
                }

                return round(array_sum($rates)/count($rates),1);

                echo $counter;
            }


        ?>

        <h2>
            <?php echo $name; ?>
        </h2>
        <br>
        <!-- <p>rate: 5/5 |  driving counter: 10</p> -->
        <p> 
            <?php
                echo average($rates) . "/5" . " | Number of journeys: " . $counter;
            ?>
        </p>
        <br>
        <p>
            <?php 
                echo $des; 

                echo "<br><br>";
                
                echo "<img src=https://api.qrserver.com/v1/create-qr-code/?size=150x150&color=ffa500&format=svg&data=https://rating.php?driver=" . $id . ">"; 
                
                echo "<br><br>";

                echo "<a href=rating.php?driver=" . $id .">test</a>"

            ?>

            <br>
        </p>

        <h2>Recent reviews</h2>

        <br>

        <?php
            $query = "SELECT * FROM rates WHERE driver_id = $url_id[driver] ORDER BY date DESC LIMIT 10";

            $result2 = $conn->query($query);

            for($i=0; $i < 10; $i++){ 

                while($row = mysqli_fetch_assoc($result2)){ 
    
                    $nick = $row['nick'];
                    $rate = $row['rate'];
                    $note = $row['note'];
    
                    echo  $nick . " | " . $rate . " | " . $note . "<br><br>" ;
                }

            }

            $conn -> close();

        ?>
        
    </body>
</html>