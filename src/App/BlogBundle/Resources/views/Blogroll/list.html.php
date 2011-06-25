<ul>
<?php
foreach($blogrolls as $blogroll): ?>
	<li>
		<a href="<?php echo $blogroll['id'] ?>">
			<?php echo $blogroll['link']; ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>