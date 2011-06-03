<div class="post">
	<div class="post_title_date">
		<div class="post_date">
			<?php echo $view['date']->format($post->getCreatedAt(), 'd-m-Y H:i'); ?>
		</div>
		<div class="post_title">
			<?php echo $post->getTitle(); ?>
		</div>
	</div>

	<div class="post_content">
	<?php
	 echo $post->getContent();
	?>
	</div>
</div>