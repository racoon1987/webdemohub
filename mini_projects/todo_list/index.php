<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>To Do List</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">	
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>	
</head>
<body>

<?php include '../../links.php'; ?>

<div class="container" id="todolistWrapper">
	<h1>A To Do List With jQuery</h1>
	
	<div id="todoList">
		<ul>
			<li class="listTitle">Monday</li>
			<li class="addItem"><input type="text" placeholder="add new item..." autofocus></li>
		</ul>
		<ul>
			<li class="listTitle">Tuesday</li>
			<li class="addItem"><input type="text" placeholder="add new item..."></li>
		</ul>
		<ul>
			<li class="listTitle">Wednesday</li>
			<li class="addItem"><input type="text" placeholder="add new item..."></li>
		</ul>
		<ul>
			<li class="listTitle">Thursday</li>
			<li class="addItem"><input type="text" placeholder="add new item..."></li>
		</ul>
		<ul>
			<li class="listTitle">Friday</li>
			<li class="addItem"><input type="text" placeholder="add new item..."></li>
		</ul>
		<ul>
			<li class="listTitle">Saturday</li>
			<li class="addItem"><input type="text" placeholder="add new item..."></li>
		</ul>
		<ul>
			<li class="listTitle">Sunday</li>
			<li class="addItem"><input type="text" placeholder="add new item..."></li>
		</ul>
	</div>
	<br><br>
	<p><strong>Notes: </strong></p>
	<ul>
		<li>* Click on day-tabs to add new task.</li>
		<li>* Tasks can be moved up/down by dragging and dropping.</li>
		<li>* You can drop task on a tab when that tab change to blue.</li>		
	</ul>
	<center><div id="trash">Terminator: Drop tasks here to destroy them.</div></center>
</div>
<script src="script.js"></script>
</body>
</html>