<!doctype html>
<html class="no-js" lang="en">
<?php 
	$place = dirname(__FILE__);
	require_once('../url.inc');
	$page_url = FILE_URL;
	$page_title = 'Projects - Joey Heflich';
	$page_des = 'New portfolio will be up soon!';
	$og_img = FILE_URL . 'images/bg_projects.jpg';
	$twitter_img = FILE_URL . 'images/bg_projects.jpg';
	$header_text = 'Makes Websites, Does Work';
?>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $page_title ?></title>
		<meta name="description" content="<?php echo $page_des; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php require_once( FILE_URL . 'includes/favicon.php'); ?>

		<?php require_once( FILE_URL . 'includes/meta.php'); ?>

		<?php require_once ( FILE_URL . 'includes/stylesandscripts.php'); ?>
	</head>
<body class="drawer drawer--right">
<div id="page" class="site relative projects">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<?php require_once ( FILE_URL . 'includes/nav.php'); ?>
	<div id="content" class="site-content">
		<?php require_once ( FILE_URL . 'content/projects.php'); ?>
	</div>
<?php require_once( FILE_URL . 'includes/footer.php'); 