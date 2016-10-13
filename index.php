<!doctype html>
<html class="no-js" lang="en">
<?php 
	$place = dirname(__FILE__);
	require_once('./url.inc');
	$page_url = FILE_URL;
	$page_title = 'Joey Heflich - A Person Who Makes Websites';
	$page_des = 'I help small companies and organizations build websites that are usable, useful, responsive and easy to update.';
	$og_img = FILE_URL . 'images/bg_pixeled.jpg';
	$twitter_img = FILE_URL . 'images/bg_pixeled.jpg';
	$header_text = 'Makes Websites, Says Hello';
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
<div id="page" class="site relative home">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<?php require_once ( FILE_URL . 'includes/nav.php'); ?>
	<div id="content" class="site-content">
		<?php require_once ( FILE_URL . 'content/index_content.php'); ?>
	</div>
<?php require_once( FILE_URL . 'includes/footer.php'); 