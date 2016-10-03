<!doctype html>
<html class="no-js" lang="en">
<?php 
	$page_url = 'http://joeyheflich.com/extralife/';
	$page_title = 'Extra Life 2016 - Joey Heflich';
	$page_des = 'Want to help some sick kids? Make a donation for Game Day 2016, help spread the word and watch me play video games!';
?>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $page_title ?></title>
		<meta name="description" content="<?php echo $page_des; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php require_once('../includes/favicon.php'); ?>

		<!-- OG/Twitter -->
		<link rel="canonical" href="<?php echo $page_url; ?>">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo $page_title; ?>">
		<meta property="og:description" content="<?php echo $page_des; ?>">
		<meta property="og:url" content="<?php echo $page_url; ?>">
		<meta property="og:site_name" content="Joey Heflich">
		<meta property="og:image" content="http://joeyheflich.com/images/extra/facebook_big.jpg">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:description" content="<?php echo $page_des; ?>">
		<meta name="twitter:title" content="<?php echo $page_title; ?>">
		<meta name="twitter:site" content="@joeyheflich">
		<meta name="twitter:image" content="http://joeyheflich.com/images/extra/twitter.jpg">
		<meta name="twitter:creator" content="@joeyheflich">
		<!-- end OG/Twitter -->

		<?php require_once ('../includes/stylesandscripts.php'); ?>
	</head>
<body>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<div id="content" class="site-content margin-bottom-xxl">
		<?php require_once ('../content/extra-life.php'); ?>
	</div>
<?php require_once('../includes/footer.php'); 