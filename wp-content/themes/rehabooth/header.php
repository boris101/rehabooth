<!DOCTYPE HTML>

<html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="wrapper">

		<header class="header">
			<div class="top-header">
				<div class="logo">
					<a href="<?=home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/rehabooth.gif" alt="logo" /></a>
				</div>
				<div class="banner">
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Banner" />
				</div>
				<div class="control-user">
					<?php if( is_user_logged_in() ) { 
						$current_user = wp_get_current_user();
					?>
					<p>Welcome <?=$current_user->user_login;?></p>
					<?php } else { ?>
					<p>Welcome Guest</p>
					<?php } ?>
					<p>
						<a href="<?=get_permalink( get_page_by_path( 'help' ) )?>">Help</a> | 
						<?php if( is_user_logged_in() ) { ?>
						<a href="<?=wp_logout_url()?>">Member Logout</a>
						<?php } else { ?>
						<a href="<?=wp_registration_url()?>">Register</a> | 
						<a href="<?=wp_login_url(home_url())?>">Member Login</a>
						<?php } ?>
					</p>
				</div>
			</div>
			<nav>
				<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 
							'theme_location' => 'primary', 
							'menu_class' => 'main-menu', 
							'container' => '' 
						) );
					}
				?>
			</nav>
		</header>