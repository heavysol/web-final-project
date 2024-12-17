<?php
    include('../db/config.php');
    include('misc_functions.php');

    function writeHighScoreToDB($score) {
        session_start();
        $id = $_SESSION['id'];
        $sql = "INSERT INTO `dont-crash` (high_score) VALUES ('$score') WHERE player_id = '$id'";
        makeSQLQuery($sql);
    }

    function viewHighScore($db) {
        global $conn;
        $table = ($db == 1) ? `dont-crash` : `where-seed`;
        session_start();
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM $table WHERE player_id = $id";
        $result = $conn->query($sql)->fetch_assoc();
        return $result['high_score'];
    }
?>