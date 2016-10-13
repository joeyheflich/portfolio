<!doctype html>
<html class="no-js" lang="en">
<?php 
	$place = dirname(__FILE__);
	require_once('../url.inc');
	$page_url = FILE_URL . 'extralife/';
	$page_title = 'Extra Life 2016 - Joey Heflich';
	$page_des = 'Want to help some sick kids? Make a donation for Game Day 2016, help spread the word and watch me play video games!';
	$og_img = FILE_URL . 'images/extra/facebook_big.jpg';
	$twitter_img = FILE_URL . 'images/extra/twitter.jpg';
	$header_text = 'Makes Websites, Helps Kids';
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
<div id="page" class="site relative extra">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<?php require_once ( FILE_URL . 'includes/nav.php'); ?>
	<div id="content" class="site-content header-buffer">
		<?php require_once ( FILE_URL . 'content/extra_life.php'); ?>
	</div>
<?php require_once( FILE_URL . 'includes/footer.php'); 