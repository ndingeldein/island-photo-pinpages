<?php
/* Main Path */
define('MAIN_PATH', realpath(__DIR__ . '/') . '/');

/* sources dir name */
define('SOURCES_DIR', 'sources');
/* Path to text editor sources path relative to public_html */
define('SOURCES_PATH', MAIN_PATH . SOURCES_DIR . '/');

/* Define Pages */
$pages = array();

$pages['administrators-ceremony'] = array(

	'name' => 'administrators-ceremony',
	'title' => 'Administrators Ceremony',
	'description' => 'Administrators Ceremony description here.'

);

$pages['administrators-event-images'] = array(

	'name' => 'administrators-event-images',
	'title' => 'Administrators Event Images',
	'description' => 'Administrators Event Images description here.'

);

$pages['graduation-day-photos'] = array(

	'name' => 'graduation-day-photos',
	'title' => 'Graduation Day Photos',
	'description' => 'Graduation Day Photos description here.'

);

$pages['race-orders'] = array(

	'name' => 'race-orders',
	'title' => 'Race Orders',
	'description' => 'Race Orders description here.'

);

$pages['not-found'] = array(

	'name' => 'not-found',
	'title' => 'Not Found',
	'description' => 'Page not found.'

);

?>