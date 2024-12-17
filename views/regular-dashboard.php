<!DOCTYPE html>
<html lang = 'en'>
<head>
<title> Dashboard - GameStation </title>
	<meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
	<link rel = 'stylesheet' href = '../assets/css/general-styles.css'>
	<link rel = 'stylesheet' href = '../assets/css/bootstrap-css/bootstrap.min.css'>
</head>
 
<body class = 'bg-secondary p-3 text-white'>
	<!-- Icon -->
	<img src = '../assets/images/logo.png' alt = 'site logo' class = 'mx-auto d-block'>

    <!-- Console start light -->
    <div class = 'container'></div>
	
	<!-- Screen -->
	<div class = 'container p-5 my-5 border border-3 rounded bg-dark'>
        <!-- Navbar -->
		<nav class = 'navbar navbar-expand-sm bg-dark navbar-dark border border-2 border-secondary rounded'>
            <div class = 'container-fluid'>
                <ul class = 'navbar-nav'>
                    <li class = 'nav-item'>
                        <a href = './regular-dashboard.php' class = 'nav-link'> Home </a>
                    </li>
                    <li class = 'nav-item'>
                        <a href = './games.php' class = 'nav-link'> Games </a>
                    </li>
                    <li class = 'nav-item'>
                        <a href = './leaderboard.php' class = 'nav-link'> Leaderboard </a>
                    </li>
                    <!--<li class = 'nav-item'>
                        <a href = './edit-profile.php' class = 'nav-link'> Edit profile </a>
                    </li>-->
                </ul>
            </div>
        </nav>

        <br>

        <!-- Player records for games --> 
        <table class = 'table table-dark table-sm table-borderless border rounded border-secondary'>
            <tr>
                <td rowspan = 2>
                    <img src = '../assets/images/dont-crash-thumbnail.png' alt = "Don't Crash thumbnail">
                </td>
                <td colspan = 2 class = 'fw-bold'> Don't Crash! </td>
            </tr>
            <tr>
                <td> 
                    High score: <?php
                        include('../functions/regular_dashboard_functions.php'); 
                        echo viewHighScore(1);
                    ?>
                </td>
                <td> Leaderboard position: 100 </td>
            </tr>
        </table>

        <table class = 'table table-dark table-sm table-borderless border rounded border-secondary'>
            <tr>
                <td rowspan = 2>
                <img src = '../assets/images/where-seed-thumbnail.png' alt = "Where's the Seed? thumbnail">
                </td>
                <td colspan = 2 class = 'fw-bold'> Where's The Seed? </td>
            </tr>
            <tr>
                <td>
                High score: <?php
                    include('../functions/regular_dashboard_functions.php'); 
                    echo viewHighScore(2);
                    ?>
                </td>
                <td> Leaderboard position: 100 </td>
            </tr>
        </table>
	</div>
</body>
</html>