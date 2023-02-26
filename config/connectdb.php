<?php
    $servername = "localhost";
    $username = "saving";
    $password = "123456";
    $dbname = "db_saving";
    // $servername = "localhost";
    // $username = "id20328123_root";
    // $password = "p|y4\8Y!wm-k!\b#";
    // $dbname = "id20328123_db_saving";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }




?>