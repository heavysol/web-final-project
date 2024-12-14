<!DOCTYPE html>
<html lang = 'en'>
<head>
<title> Admin Dashboard - GameStation </title>
	<meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
	<link rel = 'stylesheet' href = '../../assets/css/general-styles.css'>
	<link rel = 'stylesheet' href = '../../assets/css/bootstrap-css/bootstrap.min.css'>
</head>
 
<body class = 'bg-secondary p-3 text-white'>
	<!-- Icon -->
	<img src = '../../assets/images/logo.png' alt = 'site logo' class = 'mx-auto d-block'>

    <!-- Console start light -->
    <div class = 'container'></div>
	
	<!-- Screen -->
	<div class = 'container p-5 my-5 border border-3 rounded bg-dark'>
        <!-- Navbar -->
		<nav class = 'navbar navbar-expand-sm bg-dark navbar-dark border border-2 border-secondary rounded'>
            <div class = 'container-fluid'>
                <ul class = 'navbar-nav'>
                    <li class = 'nav-item'>
                        <a href = './admin-dashboard.php' class = 'nav-link'> Home </a>
                    </li>
                    <li class = 'nav-item'>
                        <a href = './players.php' class = 'nav-link'> Players </a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <!-- Site records --> 
        <table class = 'table table-dark table-sm table-borderless border rounded border-secondary'>
            <tr>
                <td> Total number of players </td>
                <td colspan = 2 class = 'fw-bold'> 0 </td>
            </tr>
            <tr>
                <td> Total playtime across games </td>
                <td> 0 </td>
            </tr>
        </table>
	</div>
</body>
</html>