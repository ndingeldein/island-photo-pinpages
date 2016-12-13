<?php

$bg_image_url = 'images/bg/' . $page['name'] . '.jpg';

$words = explode(' ', $page['title']);
$first = array_shift($words);
$rest = implode(' ', $words);
$page_title = $first . ' <strong>' . $rest . '</strong>';
$page['layout'] = array_key_exists('layout', $page) ? $page['layout'] : 'modal';
$layout = file_exists(MAIN_PATH . 'layout/page/' . $page['layout'] . '.php') ? $page['layout'] : 'modal';
?>
<div class="content-wrapper <?php echo $layout; ?>">
	<?php include(MAIN_PATH . 'layout/page/' . $layout . '.php'); ?>
</div>

<div class="bg" style="background-image:url(<?php echo $bg_image_url; ?>);"></div>