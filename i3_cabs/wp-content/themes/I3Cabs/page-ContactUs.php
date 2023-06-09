<?php
/*
Template Name:Contact Us
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="contact-us-page-section">
      <div class="container">
        <div class="map-img" style="background: url(<?php the_field('contact_us_map_img'); ?>) no-repeat;"></div>
        <div class="contact-us-div">
        <?php if ( is_active_sidebar( 'contact-us-email' ) ) : ?>
	                    <?php dynamic_sidebar( 'contact-us-email' ); ?>
	                <?php endif; ?>
        </div>
        <div class="contact-us-div">
        <?php if ( is_active_sidebar( 'contact-us-address' ) ) : ?>
	                    <?php dynamic_sidebar( 'contact-us-address' ); ?>
	                <?php endif; ?>
        </div>
        <div class="contact-us-div">
        <?php if ( is_active_sidebar( 'contact-us-phone' ) ) : ?>
	                    <?php dynamic_sidebar( 'contact-us-phone' ); ?>
	                <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="form-div-contactUs-section">
      <div class="container">
        <div class="form-div-contactus">
          <h2><?php the_field('get_in_touch_heading'); ?></h2>
          <?php the_field('form_content_contactus'); ?>
        </div>
      </div>
    </section>

    <!-- ready to call section -->
    <section class="ready-to-call">
      <h2><?php the_field('ready_to_call_heading'); ?></h2>
      <?php the_field('phone_number'); ?>
    </section>
<?php get_footer(); ?>