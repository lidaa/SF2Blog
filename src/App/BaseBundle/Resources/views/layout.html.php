<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php $view['slots']->output('title') ?></title>
	<?php $view['slots']->output('css') ?>
	<?php $view['slots']->output('js') ?>
	<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('css/main.css') ?>" type="text/css" media="all" />
</head>
<body>
	<div class="container">
		<div class="menu">
			<a href="<?php echo $view['router']->generate('_home_index') ?>"><span>Lidaa blog</span></a>
		</div>
		<div class="header"></div>
		<div class="main">
			<div class="content">
				<?php $view['slots']->output('content') ?>
			</div>
			<div class="bar">
				<h1>Categories</h1>
				<ul>
				<li>
				<a href="<?php echo $view['router']->generate('_category_select', array('title'=>'PHP')) ?>">
				PHP
				</a>
				</li>
				<li>
				<a href="<?php echo $view['router']->generate('_category_select', array('title'=>'Symfony')) ?>">
				Symfony
				</a>
				</li>
				<li>
				<a href="<?php echo $view['router']->generate('_category_select', array('title'=>'JavaScript')) ?>">
				JavaScript
				</a>
				</li>
				<li>						
				<a href="<?php echo $view['router']->generate('_category_select', array('title'=>'CSS')) ?>">
				CSS
				</a>
				</li>
				</ul>
			</div>
		</div>
		<div class="clearer"><span></span></div>
		<div class="footer">Site developped with <a href="http://www.symfony.com" target="blank">Symfony2</a></div>
	</div>
</body>
</html>