<?php $view->extend('AppBaseBundle::layout.html.php'); ?>

<?php $view['slots']->start('content'); ?> 
	<div class="form inscription">
		<form action="" method="post" >
			<?php echo $view['form']->widget($form) ?>
			<input type="submit" />
		</form>
	</div>
<?php $view['slots']->stop(); ?>