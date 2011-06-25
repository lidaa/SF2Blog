<?php $view->extend('AppBaseBundle::layout.html.php'); ?>

<?php $view['slots']->start('content') ?>
	<div id="login-form">
		<?php if ($error): ?>
			<div><?php echo $error->getMessage() ?></div>
		<?php endif; ?>
		<form action="<?php echo $view['router']->generate('login_check') ?>" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="_username" value="<?php echo $last_username ?>" />

			<label for="password">Password:</label>
			<input type="password" id="password" name="_password" />

			<!--
				If you want to control the URL the user is redirected to on success (more details below)
				<input type="hidden" name="_target_path" value="/account" />
			-->

			<input type="submit" name="login" />
		</form>
	</div>
<?php $view['slots']->stop(); ?>