<ul>
<?php
foreach($blogrolls as $blogroll): ?>
	<li>
		<a href="<?php echo $blogroll->getId() ?>">
			<?php echo $blogroll->getLink(); ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>