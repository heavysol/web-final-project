<?php
include('../db/config.php');
include('../functions/auth_functions.php');

if (isset($_POST['signup'])) {
    // receive all input values from the form
    $username = $_POST['uname'];
    $password = $_POST['passw'];
    $password2 = $_POST['passw-con'];
    $email = $_POST['email'];
    
    // setting fields not interacted with by user
    $rol = 2;
    $created_at = $updated_at = date('dd-mm-yyyy');

    // validating entries and writing them to db
    validateForm($username, $password, $email, $rol, $created_at, $updated_at, $password2);
    writeToDB($username, $password, $email, $rol, $created_at, $updated_at);
  }
?>