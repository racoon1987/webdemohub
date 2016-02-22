<?php
$base_url = 'http://217.199.187.70/linhphan.com/';

$demo_items = [
	'demo_ci' => [
		'url'			=> $base_url . 'netcom/index.php/chome',
		'img' 			=> 'imgs/codeigniter.jpg',
		'name' 			=> 'Demo CodeIgniter',
		'description' 	=> 'A website with social network and forum mixing.',
		'extra'			=> 'no'
	],
	'demo_laravel' => [
		'url'			=> $base_url . 'index.php/posts',
		'img' 			=> 'imgs/laravel.jpg',
		'name' 			=> 'Demo Laravel',
		'description' 	=> 'A website with basic functions.',
		'extra'			=> 'no'
	],
	'mini_projects' => [
		'url'			=> $base_url . '',
		'img' 			=> 'imgs/csshtmljs.jpg',
		'name' 			=> 'Mini projects',
		'description' 	=> 'Collection of mini projects (HTML, CSS, Javascript).',
		'extra'			=> 'yes'
	]
];

$extra_items = [
	'test_reaction' => [
		'name' => 'Test your reaction (game)',
		'url'	=> $base_url . '',
	],
	'toto_list' => [
		'name' => 'A to-do list',
		'url'	=> $base_url . '',
	],
	'codeplayer' => [
		'name' => 'Codeplayer (enter code and see result)',
		'url'	=> $base_url . '',
	],
	'orbiting_earth' => [
		'name' => 'Orbiting Earth',
		'url'	=> $base_url . '',
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A PHP demo page created by Linh Phan</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="animate.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="130">

<div class="extra"> <!-- this is a bottom menu to show extra information -->
	<div class="container">
		<div class="row">
			<h2>Item lists</h2>
			<button>&times;</button>
		</div>
		<div class="row">
			<?php foreach($extra_items as $item) { 
				echo "<a href='". $item['url'] ."'>" . $item['name'] . "</a>";				
			} ?>
		</div>
	</div>
</div>

<nav class="navbar navbar-default navbar-inverse navbar-fixed-top navbar-height padding20">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">DemoWebHub</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">      
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#home">HOME</a></li>
        <li><a href="#demos">DEMOS</a></li>
        <li><a href="#aboutme">ABOUT ME</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<section id="home" class="padding80">
	<div class="cover-text">
		<h1>PHP DEVELOPER</h1>
		<p class="lead">Above one year of experience in creating website with PHP - MySQL.</p>
	</div>
</section>

<section id="demos" class="padding80 wow bounceInLeft" data-wow-offset="300">	
	<div class="container">
		<h1>DEMOS</h1>
		<p class="lead">My latest CodeIgniter, Laravel, HTML, CSS, Javascript demos.</p>
		<div class="row">			
			<?php foreach($demo_items as $demo) { ?>
				<!-- show links to the demo applications -->
				<div class="col-md-4 col-xs-6">
					<div class="gallery">						
						<a href="<?php echo $demo['url']; ?>" data-extra="<?php echo $demo['extra']; ?>">
							<div class="demo-thumb">
								<img src="<?php echo $demo['img']; ?>" alt="<?php echo $demo['name']; ?>">
							</div>					
							<div class="demo-title">
								<h4><?php echo $demo['name']; ?></h4>
								<p><?php echo $demo['description']; ?></p>
							</div>
						</a>
					</div> <!-- end gallery --> 	
				</div>					
			<?php } ?>	
		</div>
	</div>
</section>

<section id="aboutme" class="padding80 wow bounceInRight" data-wow-offset="300">
	<div class="container">
		<div class="row portrait">
			<div class="col-sm-3">
				<img src="imgs/myPortrait70.png" alt="My portrait" class="img-thumbnail img-responsive">
			</div>
			<div class="col-sm-9">
				<h1>Linh Phan</h1>				
				<p>PHP developer with spirit of collaboration, quick learning and hard-working.</p>				
			</div>
		</div>
		<hr>
		<div class="row description">
			<div class="col-sm-12">
				<h3><strong>An extra summary:</strong></h3>
				<p>I’m a PHP developer who started approaching this language in mid-2012. After a 3 months’ duration of self-learning, I joined a practical PHP class to learn how to create a real commercial website with PHP/MySQL. After finishing the course, I created and launched a website that focused on IT news, office softwares and software tricks. During that time, I realized that I cannot go a long way without a good foundation of knowledge in IT field. In late 2012, I determined to go to university.</p>
				<h3><strong>Hobbies:</strong></h3>
				<p>Reading books, learning new things, going jogging in the park, games, cats.</p>
			</div>
		</div>
	</div>
</section>

<footer>
	<p>This website was created by <span><strong>Linh Phan</strong></span>.</p>
</footer>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!-- <script type="text/javascript" src="wow.js"></script> -->
	<script>
		if($(window).width() > 768) {
			new WOW().init();
		}

		$('.gallery a').click(function(e){
			if($(this).data('extra') == 'yes') {
				e.preventDefault();
				$('.extra').animate({'margin-bottom':0}, 700);
			}
		});

		$('.extra button').click(function(e){
			e.preventDefault();
			$('.extra').animate({'margin-bottom':'-500px'}, 700);
		});
		
	</script>
</body>
</html>
