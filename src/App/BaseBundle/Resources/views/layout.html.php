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
        <div class="top">
            <a href="<?php echo $view['router']->generate('_home_index') ?>"><span>Lidaa blog</span></a>
			<div class="auth">
				<?php if ($view['security']->isGranted('ROLE_USER')): ?>
					Conntecté en tant que <?php echo $app->getUser()->getUsername() ?>;
				<?php else : ?>
					<a href="<?php echo $view['router']->generate('_security_login') ?>"> Connexion</a>
					<a href="<?php echo $view['router']->generate('_user_new') ?>"> Inscription</a>
				<?php endif; ?>	
			</div>
        </div>
        <div class="header">
			<div class="auth">
				<?php if ($view['security']->isGranted('ROLE_USER')): ?>
					<a href="<?php echo $view['router']->generate('logout') ?>"> Déconnexion</a>
					<?php if ($view['security']->isGranted('ROLE_ADMIN')) { ?>
					<a href="<?php echo $view['router']->generate('sonata_admin_dashboard') ?>"> Admin</a>
					<?php } ?>
				<?php endif; ?>	
			</div>
        </div>
        <div class="clearer"><span></span></div>
        <div class="main">
            <div class="content">
                    <?php $view['slots']->output('content') ?>
            </div>
            <div class="bar">
                    <?php echo $view->render('AppBaseBundle::sidebar.html.php') ?>
            </div>
        </div>
        <div class="clearer"><span></span></div>
        <div class="footer">Site developped with <a href="http://www.symfony.com" target="blank">Symfony2</a></div>
    </div>
</body>
</html>
