<?php
$nav_pages = array_slice($pages, 0, -1);
?>
<ul class="page-nav">
<?php foreach ($nav_pages as $page): ?>
	<li><a href="<?php echo $page['name']; ?>"><?php echo $page['title']; ?></a></li>
<?php endforeach ?>
</ul>