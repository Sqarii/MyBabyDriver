<?php include "php/connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rating Driver</title>
    </head>
    <body>

        <?php
        
            $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            $url_par = parse_url($url);

            parse_str($url_par['query'], $url_id);

            $sql = "SELECT * FROM drivers WHERE driver_id =" . $url_id['driver'];

            $result = $conn->query($sql);

            while($row = mysqli_fetch_assoc($result)){

                $id = $row['driver_id'];

                $name = $row['first_name'] . " " . $row['last_name'];
            }

            $conn -> close();
        ?>

        <h2>
            <?php echo "Rate " . $name ?>
        </h2>
        <form action="php/insertRate.php" method="post">

            <label for="nick-input">Nick: </label><br>
            <input name="nick" id="nick-input" type="text">

            <br><br>

            <input type="hidden" name="driver_id" <?php echo "value=" . $id; ?>>

            <label for="rate-input">Rate: </label><br>
            <input type="number" name="rate" id="rate-input" min=1 max=5>
            
            <br><br>
            
            <label for="note-input">Note: </label><br>
            <textarea name="note" id="note-input" type="text" placeholder="Write sth about ride..."></textarea>
            
            <br><br>

            <input type="submit" name="submit" value="Rate!">
        </form>
    </body>
</html>