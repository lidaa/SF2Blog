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
            <?php if ($view['security']->isGranted('IS_AUTHENTICATED_REMEMBERED')): ?>
                <a href="<?php echo $view['router']->generate('fos_user_security_logout') ?>">
                    Déconnexion
                    <?php $this->get('translator')->trans('layout.logout',array(),'FOSUserBundle'); ?>
                </a>
           <?php else: ?>
               <a href="<?php echo $view['router']->generate('fos_user_security_login') ?>">
                   Connexion
                    <?php $this->get('translator')->trans('layout.login',array(),'FOSUserBundle'); ?>
               </a>
           <?php endif; ?>
        </div>
        <div class="header"></div>
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