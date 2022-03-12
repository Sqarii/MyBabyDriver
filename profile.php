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
        ?>

        <h2>
            <?php echo $name; ?>
        </h2>
        <br>
        <p>
            <?php 
                echo $des; 

                echo "<br><br>";
                
                echo "<img src=https://api.qrserver.com/v1/create-qr-code/?size=150x150&color=ffa500&format=svg&data=rating.php?driver=" . $id . ">"; 
                
                echo "<br><br>";

                echo "<a href=rating.php?driver=" . $id .">test</a>"

            ?>

            <br>

            

        </p>
        
    </body>
</html>