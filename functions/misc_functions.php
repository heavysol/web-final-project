<?php
    include('../db/config.php');

    function redirect($url) {
        header($url);
        exit();
    }

    function sendSQLtoDB($sql) {
        global $conn;
        $result = $conn->query($sql);
        return $result;
    }

    function makeSQLQuery($sql_str) {
        global $conn;
        $insertsql = $sql_str;
        $result = $conn->query($insertsql);
    }
?>