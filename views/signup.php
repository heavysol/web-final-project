<!DOCTYPE html>
<html>
<head>
	<title> Sign up </title>
	<meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
	<link rel = 'stylesheet' href = '../assets/css/general-styles.css'>
	<!--<link rel = 'stylesheet' href = '../assets/css/logsign-styles.css'>-->
	<link rel = 'stylesheet' href = '../assets/css/bootstrap-css/bootstrap.min.css'>
</head>

<body class = 'bg-secondary p-3 text-white'>
	<!-- Screen -->
	<div class = 'set-screen-width-height container p-5 my-5 border border-3 rounded bg-dark'>
		<section>
			<h1> Sign up </h1>
			<form action = ''>
				<div>
					<label for = 'uname' class = 'form-label'> Username </label>
					<input type = 'text' class = 'form-control' name = 'uname' placeholder = 'Enter username, like apple123' required>
				</div>

				<div>
					<label for = 'passw' class = 'form-label'> Password </label>
					<input type = 'password' class = 'form-control' name = 'passw' placeholder = 'Enter password' minlength = 8 required>
				</div>

				<div>
					<label for = 'passw-con' class = 'form-label'> Confirm password </label>
					<input type = 'password' class = 'form-control' name = 'passw-con' placeholder = 'Confirm password' minlength = 8 required>
				</div>

				<div>
					<label for = 'email' class = 'form-label'> Email </label>
					<input type = 'email' class = 'form-control' name = 'email' placeholder = 'Enter email address, like jj@gmail.com' required>
				</div>

				<br> 

				<button class = 'btn btn-light position-absolute start-50 translate-middle-x' name = 'login'> Sign up </button>
			</form>
	</div>
		

	<footer>
		
	</footer>

	<!--<script src = '../scripts/logsign-scripts/login-script.js'></script>-->
	<!-- Created on 14 Sep '24 -->
</body>

</html>