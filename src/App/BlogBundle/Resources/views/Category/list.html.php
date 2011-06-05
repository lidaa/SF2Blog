<ul>
<?php foreach($categories as $category): ?>
	<li>
		<a href="<?php echo $view['router']->generate('_category_select', array('title'=>$category->getTitle() )) ?>">
		<?php echo $category->getTitle(); ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>
