<?php
    include('../db/config.php');
    include('misc_functions.php');

    $account_exists = false; // stores true/false to signify if newly registered account already exists in db

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

    function validateEditForm($un, $pass, $email, $pass2 = '') {
        // Presence check of fields
        if ($un == '') echo 'First name not entered. Please enter it. Returning to sign up page';
        else if ($pass == '') echo 'Password not entered. Please enter it. Returning to sign up page';
        else if ($email == '') echo 'Email not entered. Please enter it. Returning to sign up page';
        if ($un == '' || $pass == '' || $email == '') redirect("Refresh:2; url=../views/edit-profile.php");
        
        // Password double-check verification
        if ($pass2 != '' && $pass != $pass2) {
            echo 'Entered password not the same. Please redo form with the same 2 passwords.';
            redirect("Refresh:2; url=../views/edit-profile.php");
        }

        // Check if newly registered account already exists in db
        global $conn, $account_exists;
        $checksql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = $conn->query($checksql)->fetch_assoc();
        if ($result['email'] == $email) {
            $account_exists = true;
            echo "Account already exists in this platform's database";
            redirect("Refresh:2; url=../views/edit-profile.php");
        };
    }

    function writeToDB($un, $pass, $email) {
        global $conn, $account_exists;

        if ($account_exists) return; // if account already exists, the function execution stops here

        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $rol = 1; // role code for regular users (players); for admin, it's 2
        // CHANGE ROL À 2 DONC QUE J'PEUX AJOUTER UN COMPTE ADMIN

        $insertsql = "INSERT INTO users (username, `password`, email) VALUES ('$un', '$pass_hash','$email' WHERE email = '$email';";
        $result = $conn->query($insertsql);
        echo 'Edit successful!';
        redirect("Refresh:2; url=../views/regular_dashboard.php");
    };

    function getUsername() {
        $res = makeUserProfileQuery();
        echo $res['username'];
    }

    function getPassword() {
        $res = makeUserProfileQuery();
        echo $res['password'];
    }

    function getEmail() {
        $res = makeUserProfileQuery();
        echo $res['email'];
    }

    function makeUserProfileQuery() {
        global $conn;
        session_start();
        $email = $_SESSION['email'];
        $insertsql = "SELECT * FROM users WHERE email = '$email';";
        $result = $conn->query($insertsql)->fetch_assoc();
        return $result;
    }
?>