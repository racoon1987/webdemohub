<?php
$base_url = 'http://demowebhub.com/';
$demowebhub_localhost_url = 'http://localhost/demohub/';
$demowebhub_url = 'http://demowebhub.com/demowebhub/index.php';

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

$bottom_links = [
	'test_reaction' => [
		'name' => 'Test your reaction (game)',
		'url'	=> $demowebhub_localhost_url . 'mini_projects/test_reaction/index.html',
	],
	'todo_list' => [
		'name' => 'A to-do list',
		'url'	=> $demowebhub_localhost_url . 'mini_projects/todo_list/index.html',
	],
	'codeplayer' => [
		'name' => 'Codeplayer (enter code and see result)',
		'url'	=> $demowebhub_localhost_url . 'mini_projects/codeplayer/index.html',
	],
	'orbiting_earth' => [
		'name' => 'Orbiting Earth',
		'url'	=> $demowebhub_localhost_url . 'mini_projects/orbiting_earth/index.html',
	]
];
?>
<style>
.back-to-demowebhub {
    z-index: 20;
    position: fixed;
    bottom: 0px;
    right: 0;
    background: rgba(0,0,0,0.75);
    color: whitesmoke;
    padding: 10px 14px;
    opacity: 0.5;
}
.back-to-demowebhub:hover {
	background: #2C9FFF;
	opacity: 1;
}
</style>
<a href="<?php echo $demowebhub_url;?>">
	<div class="back-to-demowebhub">
		<center>Back to DemoWebHub</center>
	</div>
</a>

<?php
/* ------------------------------------------------------------------------------------
embed this file's content into any project to create a link back to demowebhub homepage  
---------------------------------------------------------------------------------------

WITH CODEIGNITER 
copy file links.php into view folder and add following line into file header.php
$this->load->view('partials/links.php');

WITH LARAVEL
copy file links.php into public folder and add following line into file index.php
include 'links.php';
*/
?>