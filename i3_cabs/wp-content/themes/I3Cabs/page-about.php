<?php
/*
Template Name:About
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="about-us-page">
      <div class="container">
        <div class="taxi-to">
          <h3><?php the_field('taxi_to_melbourne_heading'); ?></h3>
          <?php the_field('taxi_to_melbourne_content'); ?>
        </div>
        <div class="area-we-cover">
          <h3><?php the_field('area_we_cover_heading'); ?></h3>
          <?php the_field('area_we_cover_content'); ?>
        </div>
      </div>
    </section>
    <!-- ready to call section -->
    <section class="ready-to-call">
      <h2><?php the_field('ready_to_call_heading'); ?></h2>
      <?php the_field('phone_number'); ?>
    </section>
    
<?php get_footer(); ?>