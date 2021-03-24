<?php
/*
* The header for our theme
* This is the template that displays all of the <head> section and everything up until your opening main
* container section (i.e. <div class="main-content").
* @package yanalla farms
* @since 1.0.0
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="preconnect" href="https://fonts.gstatic.com">
 
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Raleway&display=swap" rel="stylesheet">

 <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?> >
 <header>
 <div class="inner-container flex">
	 <div class="logo">
		<?php if ( ! has_custom_logo() ) { ?>
			<?php if ( is_front_page() && is_home() ) : ?>
				<!-- if your page is set to front-page or blog display the site title (appearance > customize) -->
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
				itemprop="url"><?php bloginfo( 'name' ); ?></a>
			<?php else : ?>
				<!-- //if your page is not set to front-page or blog display the site title (appearance > customize) -->
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
				itemprop="url"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
			<!-- //otherwise display the custom logo. -->
			<?php } else {
				the_custom_logo();
			}?>
	</div>
					<!-- nav -->
			<div class="off-canvas-menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'menu_class' => 'menu-item', //class used for the ul element which forms the menu. 'Default Menu'
							'menu_id' => 'main-menu', //id used for the ul element which forms the menu. 'Default Menu'
							'fallback_cb' => '' //if the menu doesn't exsist, a callback function will fire. Set to false for no fallback
						)
					);
				?>
			</div>
				<!-- toggle icon -->
				<div class="toggle-icon">
					<span class="hide-span"></span>
					<span class="close-1"></span>
					<span class="close-2"></span>
				</div>
</div> <!-- //inner container -->
 </header>
<div id="content" class="site-content" >

