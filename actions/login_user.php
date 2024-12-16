<?php
include('../db/config.php');
include('../functions/auth_functions.php');

if (isset($_POST['login'])) {
    // receive all input values from the form
    $password = $_POST['passw'];
    $username = $_POST['uname'];

    // validating entries and writing them to db
    validateLogin($password, $username);
  }
?>