<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>A PHP demo page created by Linh Phan</title>
	<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="libs/css/style.css">
	<link rel="stylesheet" href="libs/css/animate.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="130">

<?php include 'links.php'; ?>

<style>.back-to-demowebhub {display: none;}</style>

<nav class="navbar navbar-default navbar-inverse navbar-fixed-top navbar-height padding20">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $demowebhub_url;?>">DemoWebHub</a>
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
		<p class="lead">Above one year of experience in creating websites with PHP - MySQL.</p>
	</div>
	<center><a href="#demos"><button id="goToDemo">See demos</button></a></center>
</section>

<section id="demos" class="padding80 wow slideInLeft" data-wow-offset="300">	
	<div class="container">
		<h1>DEMOS</h1>
		<p class="lead">My latest CodeIgniter, Laravel, HTML, CSS, Javascript demos.</p>
		<div class="row">	
			<?php foreach($demo_items as $demo) { ?>
				<!-- show links to the demo applications -->
				<div class="col-md-4 col-xs-6">
					<div class="gallery">
						<a href="<?php echo $demo['url']; ?>" data-bottom-menu="<?php echo $demo['bottom_link']; ?>">
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
<div class="bottom-menu"> <!-- A bottom menu to show extra information -->
	<div class="container">
		<div class="row">
			<h2 id="slide-down">Menu <span class="glyphicon glyphicon-menu-down"></span></h2>
			<!-- <button><span class="glyphicon glyphicon-remove"></span></button> -->
		</div>
		<div class="row">
			<?php foreach($bottom_links as $link) {
				echo "<a href='". $link['url'] ."'><span class='glyphicon glyphicon-new-window'></span> " . $link['name'] . "</a>";			
			} ?>
		</div>
	</div>
</div>

<section id="aboutme" class="padding80 wow slideInUp" data-wow-offset="300">
	<div class="container">
		<div class="row portrait">
			<div class="col-sm-3">
				<img src="imgs/myPortrait70.jpg" alt="My portrait" class="img-thumbnail img-responsive">
			</div>
			<div class="col-sm-9">
				<h2>Linh Phan</h2>				
				<p>PHP developer with spirit of collaboration, quick learning and hard-working.</p>
			</div>
		</div>
		<hr>
		<div class="row description">
			<div class="col-sm-12">
				<h3><strong>An extra summary:</strong></h3>
				<p>I’m a PHP developer who started approaching this language in mid-2012. After 3 months self-learning duration, I joined a practical PHP course to learn how to create a real commercial website with PHP - MySQL. After finishing the course, I created and launched a website that focused on IT news, office softwares and software tricks. During that time, I realized that I cannot go a long way without a good foundation of knowledge in IT field, so I made a decision of going to university. Now, I've graduated and felt ready for the new beginning in IT.</p>
				<h3><strong>Hobbies:</strong></h3>
				<p>Reading books, learning new things, going jogging in the park, Japanese music, playing games, cats.</p>
			</div>
		</div>
	</div>
</section>

<footer>
	<p>This website was created by <span><strong>Linh Phan</strong> - 2016</span>.</p>
</footer>
	<script type="text/javascript" src="libs/js/jquery.min.js"></script>
	<script src="libs/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="libs/js/wow.js"></script>
	<script>
		var bottomMenu = $('.bottom-menu');
		if($(window).width() > 960) {
			new WOW().init();
		}

		$('.gallery a').click(function(e){
			if($(this).data('bottom-menu') == 'yes') {
				e.preventDefault();
				bottomMenu.animate({'margin-bottom':0}, 400);
			}
		});

		$('#slide-down').click(function(e){
			e.preventDefault();
			bottomMenu.animate({'margin-bottom':'-500px'}, 400);
		});
		
		$('body > *').not('body > .bottom-menu').click(function(e){
			if(bottomMenu.css('margin-bottom') == '0px') {
				e.preventDefault();
				bottomMenu.animate({'margin-bottom':'-500px'}, 400);
			}			
		});
	</script>
</body>
</html>
