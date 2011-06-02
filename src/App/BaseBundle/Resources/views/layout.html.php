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
			<a href=""><span>Lidaa blog</span></a>
		</div>
		<div class="header"></div>
		<div class="main">
			<div class="content">
				<?php $view['slots']->output('content') ?>
			</div>
			<div class="bar">
				<h1>Categories</h1>
				<ul>
					<li><a href="index.html">PHP</a></li>
					<li><a href="index.html">Symfony</a></li>
					<li><a href="index.html">JavaScript</a></li>
					<li><a href="index.html">CSS</a></li>
				</ul>
			</div>
		</div>
		<div class="footer"></div>
	</div>
</body>
</html>