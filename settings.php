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

$pages['special-events'] = array(

	'name' => 'special-events',
	'title' => 'Special Events',
	'description' => 'Special Events description here.'

);

$pages['schedule-an-appointment-1'] = array(

	'name' => 'schedule-an-appointment-1',
	'title' => 'Schedule An Appointment',
	'description' => 'Schedule An Appointment 1 description here.'

);

$pages['schedule-an-appointment-2'] = array(

	'name' => 'schedule-an-appointment-2',
	'title' => 'Schedule An Appointment',
	'description' => 'Schedule An Appointment 2 description here.'

);

$pages['schedule-an-appointment-3'] = array(

	'name' => 'schedule-an-appointment-3',
	'title' => 'Schedule An Appointment',
	'description' => 'Schedule An Appointment 3 description here.',
	'layout' => 'text'

);

$pages['portrait-registration'] = array(

	'name' => 'portrait-registration',
	'title' => 'Portrait Registration',
	'description' => 'Portrait Registration description here.',
	'layout' => 'text'

);
$pages['graduation-registration'] = array(

	'name' => 'graduation-registration',
	'title' => 'Graduation Registration',
	'description' => 'Graduation Registration description here.',
	'layout' => 'text'

);

$pages['school-link'] = array(

	'name' => 'school-link',
	'title' => 'School Link',
	'description' => 'School Link description here.',
	'layout' => 'modal_three'

);

$pages['sports-link'] = array(

	'name' => 'sports-link',
	'title' => 'Sports Link',
	'description' => 'Sports Link description here.',
	'layout' => 'modal_three'

);

$pages['not-found'] = array(

	'name' => 'not-found',
	'title' => 'Not Found',
	'description' => 'Page not found.',
	'layout' => 'text'

);

?>