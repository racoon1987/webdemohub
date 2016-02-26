<!DOCTYPE html>
<html>
<head>
	<title>Codeplayer</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
</head>
<body>

<?php include '../../links.php'; ?>

<div id="wrapper">
	<div id="menuBar">
		<div id="logo">
			Codeplayer
		</div>
		<div id="buttonDiv">
			<button id="runButton">Run</button>
		</div>
		<ul id="toggles">
			<li class="toggle selected">HTML</li>
			<li class="toggle ">JS</li>
			<li class="toggle ">CSS</li>
			<li class="toggle selected" style="border: none">Result</li>		
		</ul>
	</div>
	<div class="clear"></div>
	<div class="codeContainer" id="HTMLContainer">
		<div class="codeLabel"></div>
		<textarea id="htmlCode" placeholder="Place your html code here..."></textarea>
	</div>
	<div class="codeContainer" id="CSSContainer">
		<div class="codeLabel"></div>
		<textarea id="cssCode" placeholder="Place your css code here..."></textarea>
	</div>
	<div class="codeContainer" id="JSContainer">
		<div class="codeLabel"></div>
		<textarea id="jsCode" placeholder="Place your js code here..."></textarea>
	</div>
	<div class="codeContainer" id="resultContainer">
		<div class="codeLabel">
			<div style="background: white;"></div>
		</div>
		<iframe id="resultFrame" src="" frameborder="0"></iframe>
	</div>
</div>
<script>
	var windowHeight = $(window).height();
	var menuBarHeight = $('#menuBar').height();
	var codeContainerHeight = windowHeight - menuBarHeight;
	$('.codeContainer').height(codeContainerHeight + 'px');
	$('.toggle').click(function(){
		$(this).toggleClass('selected');

		var activeDiv = $(this).html();
		$('#' + activeDiv + 'Container').toggle();

		var showingDivs = $('.codeContainer').filter(function(){
			return ($(this).css('display') != 'none');
		}).length;

		var width = 100/showingDivs;
		$('.codeContainer').css('width', width + '%');
	});

	$('#runButton').click(function()
	{
		$('#resultFrame').contents().find('html').html('<style>' + $('#cssCode').val() + '</style>' + $('#htmlCode').val());

		document.getElementById('resultFrame').contentWindow.eval($('#jsCode').val());
	});
</script>
</body>
</html>