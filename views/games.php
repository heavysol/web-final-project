<!DOCTYPE html>
<html lang = 'en'>
<head>
<title> Games - GameStation </title>
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
                    <li class = 'nav-item'>
                        <a href = './edit-profile.php' class = 'nav-link'> Edit profile </a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <!-- Game list --> 
        <a class = 'btn btn-secondary border rounded border-secondary p-2 w-75 mx-auto d-block visible' href = './dont-crash-game.php'>
            <img src = '../assets/images/dont-crash-thumbnail.png' alt = "Don't Crash thumbnail"> Don't Crash!
        </a>

        <br>

        <a class = 'btn btn-secondary border rounded border-secondary p-2 w-75 mx-auto d-block' href = './where-seed-game.php'>
            <img src = '../assets/images/where-seed-thumbnail.png' alt = "Where's The Seed thumbnail"> Where's The Seed?
        </a>
	</div>
</body>
</html>