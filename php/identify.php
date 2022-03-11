<?php
    $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $url_par = parse_url($url);

    parse_str($url_par['query'], $url_id);

    $sql = "SELECT * FROM drivers WHERE driver_id =" . $url_id['driver'];

    $result = $conn->query($sql);
?>