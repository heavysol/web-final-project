<?php
include('../db/config.php');
include('../functions/regular_dashboard_functions.php');

if (isset($_POST['edit'])) {
    // receive all input values from the form
    $username = $_POST['uname'];
    $password = $_POST['passw'];
    $password2 = $_POST['passw-con'];
    $email = $_POST['email'];

    // validating entries and writing them to db
    validateEditForm($username, $password, $email, $password2);
    writeToDB($username, $password, $email);
  }
?>