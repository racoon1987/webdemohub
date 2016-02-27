<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Test your reaction</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include '../../links.php'; ?>

<p><strong>Rule: </strong> If you touch/click on circle and square in less than 1s, you'll get points. The less time it takes you to touch them, the more points you'll get. You have 30 seconds to get as many points as you can. Have fun!</p>
<div id="field">
	<div id="cover-screen">
		<h4 id="gameover">Game Over</h4>
		<center><button id="start">Start new game</button></center>
	</div>
	<h4 id="showPoint">Your score: <span id="score"></span></h4>
	<h4 id="remainingTime">Remaining time: <span id="time"></span></h4>
	
	<div id="box"></div>
</div>

<script src="script.js"></script>
</body>
</html>