<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<?php if (is_home() || is_front_page()) : ?>
		<title>title</title>

	<?php else : ?>
		<title><?php echo trim(wp_title('', false)); ?> | title</title>
	<?php endif; ?>

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"> -->

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style_pc.css?_<?php microtime(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style_mobile.css?_<?php microtime(); ?>">

	<script src="<?php echo get_template_directory_uri(); ?>/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/common.js"></script>
</head>

<body>
	<header class="header">
		<div class="container header-inner">
			<div class="logo">Gatts<span>COM</span></div>
			<nav>
				<ul class="menu">
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#services">SERVICES</a></li>
					<li><a href="#news">NEW</a></li>
					<li><a href="#blog">BLOG</a></li>
				</ul>
			</nav>

		</div>
	</header>