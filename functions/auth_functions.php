<?php
    include('../db/config.php');
    include('misc_functions.php');

    $account_exists = false; // stores true/false to signify if newly registered account already exists in db

    // Server-side validation of login and register forms
    function validateForm($un, $pass, $email, $rol, $crea_at, $up_at, $pass2 = '') {
        // Presence check of fields
        if ($un == '') echo 'First name not entered. Please enter it. Returning to sign up page';
        else if ($pass == '') echo 'Password not entered. Please enter it. Returning to sign up page';
        else if ($email == '') echo 'Email not entered. Please enter it. Returning to sign up page';
        if ($un == '' || $pass == '' || $email == '') redirect("Refresh:2; url=../views/signup.php");
        
        // Password double-check verification
        if ($pass2 != '' && $pass != $pass2) {
            echo 'Entered password not the same. Please redo form with the same 2 passwords.';
            redirect("Refresh:2; url=../views/signup.php");
        }

        // Check if newly registered account already exists in db
        global $conn, $account_exists;
        $checksql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = $conn->query($checksql)->fetch_assoc();
        if ($result['email'] == $email) {
            $account_exists = true;
            echo "Account already exists in this platform's database";
            redirect("Refresh:2; url=../views/signup.php");
        };
    }

    function writeToDB($un, $pass, $email, $rol, $crea_at, $up_at) {
        global $conn, $account_exists;

        if ($account_exists) return; // if account already exists, the function execution stops here

        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $rol = 1; // role code for regular users (players); for admin, it's 2
        // CHANGE ROL À 2 DONC QUE J'PEUX AJOUTER UN COMPTE ADMIN

        $insertsql = "INSERT INTO users (username, `password`, email, `role`, created_at, updated_at) VALUES ('$un', '$pass_hash','$email', '$rol', '$crea_at', '$up_at');";
        $result = $conn->query($insertsql);
        if ($result) {
            echo 'Sign in successful!';
            validateLogin($pass, $un);
        } else {
            echo 'Unsuccessful sign in. Please try again.';
            redirect("Refresh:2; url=../views/signup.php");
        }
    }

    function validateLogin($pass, $usern) {
        if ($pass == '') {
            echo 'Password not entered. Please enter it';
            redirect("Refresh:2; url=../views/login.php");}
        else if ($usern == '') {
            echo 'Username not entered. Please enter it';
            redirect("Refresh:2; url=../views/signup.php");}

        global $conn;
        $checksql = "SELECT * FROM users WHERE username = '$usern' LIMIT 1";
        $result = $conn->query($checksql)->fetch_assoc();
        if ($result['username'] == $email) {
            if (!password_verify($pass, $result['password'])) {
                echo 'Wrong password. Please enter the correct one';
                redirect("Refresh:2; url=../views/login.php");} 
            else {
                session_start();
                $_SESSION['id'] = $result['id'];$_SESSION['role'] = $result['role'];
                redirectToDashboard($_SESSION['role']);
            }
        } else {
            echo 'Account nonexistent. Please register as new account';
            redirect("Refresh:2; url=../views/index.php");}
    }

function redirectToDashboard($rol) {
    if ($rol == 1) redirect('Location: ../views/regular-dashboard.php'); 
    else if ($rol == 2) redirect('Location: ../views/admin/admin-dashboard.php');
}
?>