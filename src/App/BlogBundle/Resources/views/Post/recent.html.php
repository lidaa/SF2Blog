<ul>
<?php foreach ($posts as $post): ?>
<li>
	<a href="<?php echo $view['router']->generate('_post_show', array('id' => $post->getId())) ?>"> 
	<?php echo $post->getTitle(); ?>
	</a>
</li>
<?php endforeach; ?>
</ul>
