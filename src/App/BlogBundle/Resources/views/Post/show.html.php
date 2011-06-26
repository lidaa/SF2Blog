<?php $view->extend('AppBaseBundle::layout.html.php'); ?>

<?php $view['slots']->start('content'); ?> 

<div class="post">
	<div class="post_title_date">
		<div class="post_date">
			<?php echo $view['date']->format($post->getCreatedAt(), 'd-m-Y H:i'); ?>
		</div>
		<div class="post_title">
			<a href="<?php echo $view['router']->generate('_post_show', array('id' => $post->getId())) ?>"> <?php echo $post->getTitle(); ?></a>
		</div>
	</div>

	<div class="post_content">
	<?php
		echo $post->getContent();
	?>
	</div>

	<div class="post_comments">
		<?php if(count($post->getComments()) != 0): ?>
			<?php foreach ($post->getComments() as $comment): ?>
				<?php echo $comment->getContent() ?>
			<?php endforeach; ?>
		<?php else: ?>
			<div class="msg_warning">
				Soyer le premier à commenter cet article
			</div>
		<?php endif; ?>
	</div>

	<div class="form comment">
		<form action="" method="post" >
			<?php echo $view['form']->widget($form) ?>
			<input type="submit" />
		</form>
	</div>

</div>

<?php $view['slots']->stop(); ?>