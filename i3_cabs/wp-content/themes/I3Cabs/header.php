<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


	<header>
	<div class="container">
        <h1 class="logo"><a href="#">Sitename</a></h1>
        <nav>
		<?php wp_nav_menu( array( 'menu_class' => 'navigation', 'container' => false, 'theme_location' => 'primary' ) ); ?>
        </nav>
        
      </div>
	</header><!-- #masthead -->
	<?php

if(is_page(9)){ ?>
<section class="banner" style="background: url(<?php the_field('header_bg_image'); ?>) no-repeat;">
      <div class="container">
	  <h3><?php the_field('book_now_heading'); ?></h3>
        <h2><?php the_field('13cabs_heading'); ?></h2>
        <p><?php the_field('about_i3cabs'); ?></p>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-car-img.png" alt="car-img" />
      </div>
</section>

<?php
}else{ ?>
<section class="banner-inner" style="background-image: url(<?php  $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
   if($image_url == ""){ echo bloginfo('url') ."/wp-content/themes/I3Cabs/images/abous-us-banner-Bg.png";}else{ echo $image_url;} ?>);">
      <div class="container">
        <h2><?php the_title(); ?></h2>
        <p><i class="material-icons">&#xe88a;</i>Home // <?php the_title(); ?> </p>
      </div>
</section>

<?php
}

?>

	