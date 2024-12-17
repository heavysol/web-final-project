<?php
    include('../db/config.php');
    include('misc_functions.php');

    function writeHighScoreToDB($score) {
        session_start();
        $id = $_SESSION['id'];
        $sql = "INSERT INTO `dont-crash` (high_score) VALUES ('$score')";
        makeSQLQuery($sql);
    }
?>