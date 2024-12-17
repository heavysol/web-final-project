<?php
include('../db/config.php');
include('../functions/regular_dashboard_functions.php');

header('Content-type: application/json; charset=UTF-8');
$hs = json_decode($_POST['hs'], false);

writeHighScoreToDB($hs);
?>