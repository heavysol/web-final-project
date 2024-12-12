<!DOCTYPE html>
<html lang = 'en'>
<head>
<title> Startup </title>
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
        <!-- Game -->
        <div id = 'game_screen'></div>
	</div>

    <script src = "phaser.min.js"></script>
            <script type="module" src="../assets/js/games/endless-runner/Prompt-Text-folder/index.js"></script>

            <script type = 'module' src = '../assets/js/games/endless-runner/GameState.js'></script>
            <script type = 'module' src = '../assets/js/games/endless-runner/PromptScene.js'></script>
            <script type = 'module' src = 'GameScene.js'></script>
            <script type = 'module' src = '../assets/js/games/endless-runner/game.js'></script>
</body>
</html>