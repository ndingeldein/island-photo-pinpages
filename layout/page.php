<?php

$bg_image_url = 'images/bg/' . $page['name'] . '.jpg';

$words = explode(' ', $page['title']);
$first = array_shift($words);
$rest = implode(' ', $words);
$page_title = $first . ' <strong>' . $rest . '</strong>';

?>

<div class="content-wrapper">
	<div class="content row">
		
		<div class="page-content">
			<h1><?php echo $page_title; ?></h1>
			<div class="rte">
				<?php readfile(SOURCES_PATH . $page['name'] . '.html'); ?>
				<?php if (file_exists(SOURCES_PATH . $page['name'] . '.php')): ?>
					<?php include(SOURCES_PATH  . $page['name'] . '.php'); ?>
				<?php endif ?>
			</div>			
		</div>
		<?php include(MAIN_PATH . 'layout/page_footer.php'); ?>

	</div>
</div>

<div class="bg" style="background-image:url(<?php echo $bg_image_url; ?>);"></div>