<!DOCTYPE html>
<html lang = 'en'>
<head>
<title> Startup </title>
	<meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
	<link rel = 'stylesheet' href = '../assets/css/general-styles.css'>
    <link rel = 'stylesheet' href = '../assets/css/game-screen-styles.css'>
	<link rel = 'stylesheet' href = '../assets/css/bootstrap-css/bootstrap.min.css'>
</head>
 
<body class = 'bg-secondary p-3 text-white'>
	<!-- Icon -->
	<img src = '../assets/images/logo.png' alt = 'site logo' class = 'mx-auto d-block'>

    <!-- Console start light -->
    <div class = 'container'></div>
	
	<!-- Screen -->
    <br><br>
	<div id = 'game_screen'></div>

    <script src = "phaser.min.js"></script>
            <script type="module" src="../assets/js/games/dont-crash/Prompt-Text-folder/index.js"></script>

            <script type = 'module' src = '../assets/js/games/dont-crash/GameState.js'></script>
            <script type = 'module' src = '../assets/js/games/dont-crash/PromptScene.js'></script>
            <script type = 'module' src = '../assets/js/games/dont-crash/GameScene.js'></script>
            <script type = 'module' src = '../assets/js/games/dont-crash/game.js'></script>
</body>
</html>