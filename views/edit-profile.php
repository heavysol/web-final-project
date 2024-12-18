<!DOCTYPE html>
<html lang = 'en'>
<head>
	<title> Edit profile - GameStation </title>
	<meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
	<link rel = 'stylesheet' href = '../assets/css/general-styles.css'>
	<link rel = 'stylesheet' href = '../assets/css/bootstrap-css/bootstrap.min.css'>
</head>

<body class = 'bg-secondary p-3 text-white'>
	<!-- Icon -->
	<img src = '../assets/images/logo.png' alt = 'site logo' class = 'mx-auto d-block'>
	
	<!-- Screen -->
	<div class = 'container p-5 my-5 border border-3 rounded bg-dark'>
		<section>
			<h1> Edit profile </h1>
			<form action = '../actions/edit_profile_acts.php'>
				<?php
					require_once '../functions/regular_dashboard_functions.php';
					error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
					session_start();
				?>
				<div>
					<label for = 'uname' class = 'form-label'> Username </label>
					<input type = 'text' class = 'form-control' name = 'uname' value = <?php getUsername();?> minlength = 1  required>
				</div>

				<div>
					<label for = 'passw' class = 'form-label'> Password </label>
					<input type = 'password' class = 'form-control' name = 'passw' value = <?php getPassword();?> minlength = 8 required>
				</div>

				<div>
					<label for = 'passw-con' class = 'form-label'> Confirm password </label>
					<input type = 'password' class = 'form-control' name = 'passw-con' value = <?php getPassword();?> minlength = 8 required>
				</div>

				<div>
					<label for = 'email' class = 'form-label'> Email </label>
					<input type = 'email' class = 'form-control' name = 'email' value = <?php getEmail();?> required>
				</div> 

				<br>

				<button class = 'btn btn-light mx-auto d-block' name = 'edit'> Edit profile </button>
			</form>
	</div>
</body>

</html>