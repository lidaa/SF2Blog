<h1>Categories</h1>
<?php //$view['slots']->output('category') ?>
<?php echo $view['actions']->render('AppBlogBundle:Category:list') ?>
<h1>Archive</h1>
<ul>
	<li>
		<a href="<?php echo $view['router']->generate('_home_index') ?>">2005</a>
	</li>
	<li>
		<a href="<?php echo $view['router']->generate('_home_index') ?>">2006</a>
	</li>
	<li>
		<a href="<?php echo $view['router']->generate('_home_index') ?>">2007</a>
	</li>
	<li>
		<a href="<?php echo $view['router']->generate('_home_index') ?>">2008</a>
	</li>
	<li>
		<a href="<?php echo $view['router']->generate('_home_index') ?>">2009</a>
	</li>
	<li>
		<a href="<?php echo $view['router']->generate('_home_index') ?>">2010</a>
	</li>
</ul>
<h1>Blogroll</h1>
<?php if($view['slots']->has('blogroll')): ?>
	<?php $view['slots']->output('blogroll') ?>
<?php else: ?>
	<?php echo $view['actions']->render('AppBlogBundle:Blogroll:list') ?>
<?php endif; ?>
<h1>Articles recents</h1>
<?php echo $view['actions']->render('AppBlogBundle:Post:recent') ?>
<h1>Recherche</h1>
<div class="form search">
	<form action="" method="GET">
		<span></span> 
		<input type="search" placeholder="" name="query">
	</form>
</div>