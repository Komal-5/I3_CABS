<?php
/*
Template Name:Book Here
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="book-here">
  <div class="container">
    <div class="form-div-BookHere">
      <h2><?php the_field('book_here_heading'); ?></h2>
      <?php the_field('book_here_form_content'); ?>
    </div>
  </div>
</section>

    <!-- ready to call section -->
    <section class="ready-to-call">
      <h2><?php the_field('ready_to_call_heading'); ?></h2>
      <?php the_field('phone_number'); ?>
    </section>
<?php get_footer(); ?>