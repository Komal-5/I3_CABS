<?php
/*
Template Name:Fleets
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="fleet-section-page">
      <div class="container">
        <!-- allfleet -->
		
        <div class="fleet-div-container">
		<?php
		            $args = array(
		              'post_type' => 'allfleet',
		              'numberposts' => -1,
		              'posts_per_page' => -1,
		               
		              
		              'order' => 'ASC'
		          );
		            $myquery = new WP_Query($args);
		              if($myquery->have_posts()) :
		                  while($myquery->have_posts()) :
		                     $myquery->the_post();
		          ?>
          <div class="fleet-div">
		  <?php the_post_thumbnail('full'); ?>
            <div>
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              <a href="<?php the_permalink() ?>" class="book-now1">BOOK NOW</a>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>

    <!-- ready to call section -->
    <section class="ready-to-call">
      <h2><?php the_field('ready_to_call_heading'); ?></h2>
      <?php the_field('phone_number'); ?>
    </section>
<?php get_footer(); ?>