document.getElementById('box').style.display = 'none';
document.getElementById('gameover').style.display = 'none';
var remainingTime = 0;

function getRandomColor(){
	var letters = '0123456789ABCDEF'.split('');
	var color = '#';
	for(var i = 0; i < 6; i++) {
		color += letters[Math.round(Math.random() * 15)];
	}
	return color;
}

var clickTime, createdTime, reactionTime;
var field = document.getElementById('field');
var totalPoint = 0;

function makeBox() {
	var time = Math.random(); 
	var left = Math.random() * (field.clientWidth - 100); 
	var top = Math.random() * (field.clientHeight - 100);
	time = time * 1500;  // box appear after 1,5s or less

	setTimeout(function() {
		if(Math.random() > 0.5) {
			document.getElementById('box').style.borderRadius = '100px';
		} else {
			document.getElementById('box').style.borderRadius = '0';
		}
		
		document.getElementById('box').style.backgroundColor = getRandomColor();
		document.getElementById('box').style.top = top + 'px';
		document.getElementById('box').style.left = left + 'px';
		document.getElementById('box').style.display = 'block';

		createdTime = Date.now();
	}, time);
}

document.getElementById('box').onclick = function() {
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

	document.getElementById('point').innerHTML = totalPoint;
	this.style.display = 'none';

	makeBox();
}

document.getElementById('start').onclick = function() {
	remainingTime = 30;
	document.getElementById('point').innerHTML = 0;
	document.getElementById('gameover').style.display = 'none';
	document.getElementById('start').style.display = 'none';
	document.getElementById('cover-screen').style.display = 'none';
	makeBox();

	var interval = setInterval(function(){
		remainingTime -= 1;
		remainingTimeText = remainingTime + 's';
		document.getElementById('time').innerHTML = remainingTimeText;
	}, 1000);

	setTimeout(function(){
		clearInterval(interval);
		document.getElementById('cover-screen').style.display = 'block';
		document.getElementById('start').style.display = 'block';
		document.getElementById('time').innerHTML = '0s';			
		document.getElementById('gameover').style.display = 'block';
	}, remainingTime * 1000);
};