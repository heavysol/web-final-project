<?php
    include('../db/config.php');
    include('misc_functions.php');

    function writeDontCrashHSToDB($score) {
        session_start();
        $id = $_SESSION['id'];
        $sql = "INSERT INTO `dont-crash` (high_score) VALUES ('$score') WHERE player_id = '$id'";
        makeSQLQuery($sql);
    }

    function writeWhereSeedHSToDB($score) {
        session_start();
        $id = $_SESSION['id'];
        $sql = "INSERT INTO `where-seed` (high_score) VALUES ('$score') WHERE player_id = '$id'";
        makeSQLQuery($sql);
    }

    function viewHighScore($db) {
        global $conn;
        session_start();
        $id = $_SESSION['id'];
        $sql = ($db == 1) ? "SELECT * FROM `dont-crash` WHERE player_id = '$id';" : "SELECT * FROM `where-seed` WHERE player_id = '$id';";

        $result = $conn->query($sql)->fetch_assoc();
        return $result['high_score'];
    }
?>