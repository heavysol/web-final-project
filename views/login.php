<!DOCTYPE html>
<html>
<head>
	<title> Log in </title>
	<meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
	<link rel = 'stylesheet' href = '../assets/css/general-styles.css'>
	<!--<link rel = 'stylesheet' href = '../assets/css/logsign-styles.css'>-->
	<link rel = 'stylesheet' href = '../assets/css/bootstrap-css/bootstrap.min.css'>
</head>

<body class = 'bg-secondary p-3 text-white'>
	<!-- Screen -->
	<div class = 'set-screen-width-height container p-5 my-5 border border-3 rounded bg-dark'>
		<section>
			<h1> Log in </h1>
			<form action = ''>
				<div>
					<label for = 'uname' class = 'form-label'> Username </label>
					<input type = 'text' class = 'form-control' name = 'uname' placeholder = 'Enter username, like apple123' required>
				</div>

				<div>
					<label for = 'passw' class = 'form-label'> Password </label>
					<input type = 'password' class = 'form-control' name = 'passw' placeholder = 'Enter password' minlength = 8 required>
				</div>

				<br> 

				<button class = 'btn btn-light position-absolute start-50 translate-middle-x' name = 'login'> Log in </button>
			</form>
	</div>
		

	<footer>
		
	</footer>

	<!--<script src = '../scripts/logsign-scripts/login-script.js'></script>-->
	<!-- Created on 14 Sep '24 -->
</body>

</html>