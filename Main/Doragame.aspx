<!doctype html>
<html>
<head>
<title>How to create HTML5 Memory Game - Bytutorial.com</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" rel="stylesheet"/>
<link href="/CSS/Doragame.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="canvas-game">
	<div id="game-content"></div>
</div>
<div id="game-statistic">
	<div id="statistic-left">No of Clicks: <span id="no-of-clicks" class="bold-text">0</span></div>
	<div id="statistic-right">Correct Guess: <span id="correct-guess" class="bold-text">0</span></div>
	<div class="clear"></div>
</div>
<div id="game-message">
	<div class="congrats-message">Congratulations, you have revealed all the images ;-)</div>
	<button id="btnRestart" type="button">Restart</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/doragame.js"></script>

</body>
</html>