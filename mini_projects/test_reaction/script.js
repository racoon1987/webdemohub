// Elements used in game
var box = document.getElementById('box');
var gameoverText = document.getElementById('gameover');
var field = document.getElementById('field');
var startButton = document.getElementById('start');
var timeRemainingText = document.getElementById('time');
var score = document.getElementById('score');
var coverScreen = document.getElementById('cover-screen');

// Initialize game
var clickTime, createdTime, reactionTime;
var totalPoint = 0;
var remainingTime = 0;

box.style.display = 'none';
gameoverText.style.display = 'none';

// Get random color for the box
function getRandomColor(){
	var letters = '0123456789ABCDEF'.split('');
	var color = '#';
	for(var i = 0; i < 6; i++) {
		color += letters[Math.round(Math.random() * 15)];
	}
	return color;
}

// Create a new box - actually show the box again after it was hidden when user click on it
function makeBox() {
	var time = Math.random(); 
	var left = Math.random() * (field.clientWidth - 100); 
	var top = Math.random() * (field.clientHeight - 100);
	time = time * 1500;  // box appears again after 1,5s or less

	setTimeout(function() {
		if(Math.random() > 0.5) {
			box.style.borderRadius = '100px';
		} else {
			box.style.borderRadius = '0';
		}
		
		box.style.backgroundColor = getRandomColor();
		box.style.top = top + 'px';
		box.style.left = left + 'px';
		box.style.display = 'block';

		createdTime = Date.now();
	}, time);
}

// Create a new box after a short time when user click on an existing box
box.onclick = function() {
	var point = 0;

	clickTime = Date.now();
	reactionTime = ( clickTime - createdTime ) / 1000;

	if(reactionTime < 1) {
		point = Math.round(reactionTime / 0.01);
	}
	else {
		point = 0;
	}

	totalPoint += point;

	score.innerHTML = totalPoint;
	this.style.display = 'none';

	makeBox();
}

// Start the game when user click on the start button
startButton.onclick = function() {
	remainingTime = 30;
	totalPoint = 0;
	box.style.display = 'none';
	score.innerHTML = 0;
	gameoverText.style.display = 'none';
	startButton.style.display = 'none';
	coverScreen.style.display = 'none';
	makeBox();

	var interval = setInterval(function(){
		remainingTime -= 1;
		remainingTimeText = remainingTime + 's';
		timeRemainingText.innerHTML = remainingTimeText;
	}, 1000);

	setTimeout(function(){
		clearInterval(interval);

		coverScreen.style.display = 'block';		
		timeRemainingText.innerHTML = '0s';			
		gameoverText.style.display = 'block';

		// show start button 1,5s after the game end
		setTimeout(function(){
			startButton.style.display = 'block';
		}, 1500);

	}, remainingTime * 1000);
};