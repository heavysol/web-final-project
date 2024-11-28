<!DOCTYPE html>
<html>
<head>
	<title> Log in - Moreish </title>
	<meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
	<link rel = 'stylesheet' href = '../styles/general-styles.css'>
	<link rel = 'stylesheet' href = '../styles/logsign-styles.css'>
</head>

<body>
	<!-- Navbar -->
	<div class = 'navbar'>
		<a href = '../index.html'> <img src = '../assets/pics/logo.png' alt = 'Moreish logo' class = 'app-logo-nav'> </a>
		<div class = 'navbar-right'>
			<a class = 'nav-op' href = 'login.html'> Log in </a>
			<a class = 'nav-op' href = 'signup.html'> Sign up </a>
		</div>
	</div>

	<!-- Log in/Sign up form -->
	<!-- Login and signup toggle buttons -->
	<table class = 'logsign'>
		<tr>
			<td class = 'logsign-upper-text-left' style = 'background-color: #d2b48c; width: 50%'>
				<a class = 'logsign-upper-text' style = 'color: white; background-color: #d2b48c;'> <p class = 'logsign-upper-text'>Log in</p> </a> 
			</td>
			
			<td class = 'logsign-upper-text-right, logsign-upper-text-backg' style = 'border-radius: 0px 25px 0px 0px;'>
				<a href = 'signup.html' class = 'logsign-upper-text, logsign-upper-text-hover'> <p class = 'logsign-upper-text'>Sign up</p> </a>
			</td>
		</tr>

		<!-- Actual input form -->
		<tr>
			<td colspan = 2>
			<form id = 'logsign-form'>
				<!-- Input fields -->
				<div class = 'logsign-field'>
					<label for = 'uname'>
						Username <br> <input class = 'logsign-text-box' type = 'text' id = 'uname' name = 'username' placeholder = 'example: apple123 ...' required> <br>
					</label>

					<label for = 'emaila'>
						Email address <br> <input class = 'logsign-text-box' type = 'email' id = 'emaila' name = 'email-address' placeholder = 'example: apple123 ...' required> <br>
					</label>
			
					<label for = 'passw'>
						Password <br> <input class = 'logsign-text-box' type = 'password' id = 'passw' name = 'password' placeholder = 'Password required' minlength = '8' pattern = '(?=.*[A-Z]+)' required> <br>
					</label>
				</div>
				
				<!-- Submit button -->
				<div style = 'padding-bottom: 7.5px;'>
					<button id = 'submit-login'> Log in </button>
				</div>
			</form>
			</td>
		</tr>
	</table>

	<footer>
		
	</footer>

	<script src = '../scripts/logsign-scripts/login-script.js'></script>
	<!-- Created on 14 Sep '24 -->
</body>

</html>