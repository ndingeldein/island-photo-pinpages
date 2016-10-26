<?php include('settings.php'); ?>
<?php

// Get page name from url
$url = rtrim($_SERVER['REQUEST_URI'], '/');
$url = preg_replace('/\?.*/', '', $url);
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

$page_name = htmlspecialchars(end($url));

// Check if page exists
if (!file_exists(SOURCES_PATH . $page_name . '.html')){
        
    header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');
    $page_name = 'not-found';

}

$page = $pages[$page_name];

?>
<?php /* <HTML>, <HEAD> Assets; css, modernizr, fonts, etc </HEAD>, <BODY> */?>
<?php include(MAIN_PATH . 'layout/head.php'); ?>

<!-- Header -->
<?php include(MAIN_PATH . 'layout/header.php'); ?>

<!-- Page Content -->
<?php include(MAIN_PATH . 'layout/page.php'); ?>

<!-- FOOTER -->
<?php include(MAIN_PATH . 'layout/footer.php'); ?>

<!-- scripts, analytics, </BODY></HTML> -->
<?php include(MAIN_PATH . 'layout/foot.php'); ?>
