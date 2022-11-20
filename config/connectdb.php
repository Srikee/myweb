<?php
    $servername = "localhost";
    $username = "saving";
    $password = "123456";
    $dbname = "db_saving";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>