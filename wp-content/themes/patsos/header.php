<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skin Care, Medical Spa, Acne Clinic | Sozo Skin Fitness</title>
    <meta name="description" content="Sozo Skin Fitness provides medical and natural skin care, and acne treatments. Call us today at (407) 906-5470.">
    <meta name="robots" content="noodp"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>



	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/patsos/fonts/icomoon/style.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/patsos/css/application.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
	<?php include('includes/schema.php'); ?>


	
</head>
<body itemscope itemtype="http://schema.org/WebPage" <?php body_class( 'is-collapsed' ); ?>>

		
	

	<div class="drawer-mask hidden mobile-show" onclick="ga('send', 'event', 'Window Mobile Drawer Mask', 'Click', 'Close Mobile Nav');"></div>
	<?php /*<header class="fixed">
		<div class="wrap">
			<div class="mobile-hide">
				<div class="logo">
					<a href="/">
						<img src="/wp-content/themes/patsos/img/logo.svg">
					</a>
				</div>
				<a href="/women/" class="tab">
					<span>Women</span>
				</a>
				<a href="men" class="tab">
					<span>Men</span>
				</a>
				<a href="teens" class="tab">
					<span>Teens</span>
				</a>
				<a href="about" class="tab">
					<span>About</span>
				</a>
				<a href="blog" class="tab">
					<span>Blog</span>
				</a>
				<a href="" class="tab">
					<span>Contact</span>
				</a>
				<div class="right">
					<a class="mrm tsl nav-phone" href="callto:+14079065470">(407) 906-5470</a>
					<div class="btn btn--indigo">Book Your Appointment</div>
				</div>
			</div>
		</div>
	</header> */ ?>
	<?php if(is_front_page()): ?>
	<nav class="nav nav--fixed row">
	<?php else: ?>
	<nav class="nav row">
	<?php endif; ?> 
		<div class="nav-cell cell">
			<div class="nav-menu">
				<ul>
					<li>
						<a href="/women/" class="tab">
							<span>Women</span>
						</a>
					</li>
					<li>
						<a href="/men" class="tab">
							<span>Men</span>
						</a>
					</li>
					<li>
						<a href="/acne/" class="tab">
							<span>Acne</span>
						</a>
					</li>
					<li>
						<a href="<?php if(is_front_page()){ echo '#about';}else { echo '/#about';} ?>" class="tab">
							<span>About</span>
						</a>
					</li>
					<li>
						<a href="/blog/" class="tab">
							<span>Blog</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="nav-bar">
				<div class="nav-core">
					<a href="/" class="nav-logo">
						<img class="logo-white" src="/wp-content/themes/patsos/img/logo-white.svg">
						<img class="logo" src="/wp-content/themes/patsos/img/logo.svg">
					</a>
					<div class="nav-contact"> 
						<h5 class="mbf mtf ttu">Skin Care &middot; Medical Spa &middot; Acne Clinic</h5> 
						<a class="nav-contact-item" itemprop="telephone" id="nav-phone" href="tel:+14079065470"><i aria-hidden="true" class="icn--phone"></i> <span>(407) 906-5470</span> </a>
						<span class="nav-contact-divider">|</span> <a class="nav-contact-item" id="nav-email" href="mailto:sheri@sozoskinfitness.com?Subject=Hey,%20Sozo!"><i aria-hidden="true" class="icn--email"></i> <span>sheri@sozoskinfitness.com</span> </a></div>

				</div>
				<a href="#" class="nav-toggle hamburger" onclick="ga('send', 'event', 'Header Nav Mobile', 'Click', 'Toggle Mobile Nav');">
				    <span class="burger-icon"></span>
				</a>
			</div> 
		</div>
	</nav>