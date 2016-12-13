<div class="content row">		
	<div class="page-content">
		<h1 class="single-line">To Find <strong>Your Pics...</strong></h1>
		<div class="rte">
			<?php readfile(SOURCES_PATH . $page['name'] . '.html'); ?>
			<?php if (file_exists(SOURCES_PATH . $page['name'] . '.php')): ?>
				<?php include(SOURCES_PATH  . $page['name'] . '.php'); ?>
			<?php endif ?>
		</div>
		<div class="search-threesome">
			<form action="">
			<div class="search-item search-one">
				<div class="search-title">
					<span class="search-number">1</span>
					<span class="search-title-txt">Select Search Type</span>
				</div>
				<div class="search-content">
					<input type="radio" name="type" value="pin" checked> <span class="radio-label">PIN</span><br>
					<input type="radio" name="type" value="school"> <span class="radio-label">School</span><br>
				</div>
			</div>
			<div class="search-item search-two">
				<div class="search-title">
					<span class="search-number">2</span>
					<span class="search-title-txt">Type Search Term</span>
				</div>
				<div class="search-content">
					<h2>Enter Pin & Name</h2>
					<br>
					<input type="text" placeholder="PIN"><br>
					<input type="text" placeholder="First Name"><br>
					<input type="text" placeholder="Last Name"><br>
				</div>
			</div>
			<div class="search-item search-three">
				<div class="search-title">
					<span class="search-number">3</span>
					<span class="search-title-txt">Enjoy Your Pics</span>
				</div>
				<div class="search-content">
					<span class="submit"><input type="submit" value="Search Now"></span>
				</div>
			</div>
		</div>
	</div>
	<?php include(MAIN_PATH . 'layout/page_footer.php'); ?>
</div>