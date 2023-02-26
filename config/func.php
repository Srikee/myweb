<?php
    function GetMaxId($table, $feild) {
        global $conn;
        $sql = "SELECT IFNULL(MAX($feild),0)+1 AS id FROM $table;";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        return $data["id"];
    }