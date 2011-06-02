<?php $view->extend('AppBaseBundle::layout.html.php'); ?>

<?php $view['slots']->start('content'); ?> 

    <?php foreach ($posts as $post): ?>
        <?php echo $view->render('AppBlogBundle:Home:post.html.php', array('post' => $post)) ?>
    <?php endforeach; ?>

<?php $view['slots']->stop(); ?>