<ul>
<?php foreach($blogrolls as $blogroll): ?>
	<li>
		<a href="<?php echo $blogroll->getlink() ?>">
		<?php echo $blogroll->getlink(); ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>