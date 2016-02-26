<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Test your reaction</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include '../../links.php'; ?>

<p><strong>Rule: </strong> If you touch circle and square in less than 1s, you'll get points. The less time it takes you to touch circle and square, the more points you'll get. You have 30 seconds to get as many points as you can. Have fun!</p>
<div id="field">
	<div id="cover-screen">
		<h2 id="gameover">Game Over</h2>
		<center><button id="start">Start new game</button></center>
	</div>
	<h2 id="showPoint">Your score: <span id="score"></span></h2>
	<h2 id="remainingTime">Remaining time: <span id="time"></span></h2>
	
	<div id="box"></div>
</div>

<script src="script.js"></script>
</body>
</html>