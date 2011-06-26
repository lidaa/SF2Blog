<?php $view->extend('AppBaseBundle::layout.html.php'); ?>

<?php $view['slots']->start('content') ?>

	<div class="msg_error">
		<?php if ($error): ?>
			<div><?php echo $error->getMessage() ?></div>
		<?php endif; ?>
	</div>

	<div id="login-form">
		<form action="<?php echo $view['router']->generate('login_check') ?>" method="post">
			<div class="form-row">
				<label for="username">Username:</label>
				<input type="text" id="username" name="_username" value="<?php echo $last_username ?>" />
			</div>
			<div class="form-row">
				<label for="password">Password:</label>
				<input type="password" id="password" name="_password" />
			</div>
			<!--
				If you want to control the URL the user is redirected to on success (more details below)
				<input type="hidden" name="_target_path" value="/account" />
			-->
			<input type="submit" name="login" id="form-submit" />
		</form>
	</div>
<?php $view['slots']->stop(); ?>