<div class="content row">		
	<div class="page-content has-watermark">
		<h1 class="corners">
			<?php echo trim($page_title); ?>
			<div class="tl">
				<div class="h-line"></div>
				<div class="v-line"></div>
			</div>
			<div class="tr">
				<div class="h-line"></div>
				<div class="v-line"></div>
			</div>
			<div class="bl">
				<div class="h-line"></div>
				<div class="v-line"></div>
			</div>
			<div class="br">
				<div class="h-line"></div>
				<div class="v-line"></div>
			</div>
		</h1>
		<div class="rte">
			<?php readfile(SOURCES_PATH . $page['name'] . '.html'); ?>
			<?php if (file_exists(SOURCES_PATH . $page['name'] . '.php')): ?>
				<?php include(SOURCES_PATH  . $page['name'] . '.php'); ?>
			<?php endif ?>
		</div>
	</div>
	<?php include(MAIN_PATH . 'layout/page_footer.php'); ?>
</div>