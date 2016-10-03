<!doctype html>
<html class="no-js" lang="en">
<?php 
	$page_url = 'http://joeyheflich.com/extralife/';
	$page_title = 'Coming Soon - Joey Heflich';
	$page_des = 'New portfolio will be up soon!';
?>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $page_title ?></title>
		<meta name="description" content="<?php echo $page_des; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php require_once('./includes/favicon.php'); ?>

		<?php require_once ('./includes/root_stylesandscripts.php'); ?>
	</head>
<body>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<?php require_once ('./includes/nav.php'); ?>
	<div id="content" class="site-content">
		<?php require_once ('./content/index-content.php'); ?>
	</div>
<?php require_once('./includes/footer.php'); 