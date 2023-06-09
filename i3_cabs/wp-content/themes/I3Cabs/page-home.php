<?php
/*
Template Name:Home
 */
?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<section class="welcome-section">
      <div class="container">
        <div class="welcome-div">
		<?php the_field('welcome_heading'); ?>
		<?php the_field('welcome_content'); ?>
          <a href="<?php the_field('welcome_link'); ?>">READ MORE</a>
        </div>
        <div class="form-div">
        <?php the_field('form_content'); ?>
        </div>
      </div>
    </section>

	<!-- fleeet section -->
	<?php wp_reset_query(); ?>
    <section class="fleet-section">
      <h2>ALL FLEETS</h2>
      <div class="container">
        <!-- allfleet -->
		
        <div class="fleet-div-container">
		<?php
		            $args = array(
		              'post_type' => 'allfleet',
		              'numberposts' => -1,
		              'posts_per_page' => 3,
		               
		              
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

    <!-- we do best section -->
    <?php wp_reset_query(); ?>
    <section class="we-do-best-section">
    <?php the_field('we_do_best_title'); ?>
      <div class="container">
        <div class="best-div-1">
          <div class="best-div">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/star-icon.png" alt="" />
            <div>
              <h3><?php the_field('home_pickup_heading'); ?></h3>
              <?php the_field('home_pickup_content'); ?>
            </div>
          </div>
          <div class="best-div">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bonus-icon.png" alt="" />
            <div>
              <h3><?php the_field('bonuses_for_ride'); ?></h3>
              <?php the_field('bonuses_content'); ?>
            </div>
          </div>
        </div>
        <div class="best-div-2">
          <div class="best-div">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hour-glass.png" alt="" />
            <div>
              <h3><?php the_field('fast_booking_heading'); ?></h3>
              <?php the_field('fast_booking_content'); ?>
            </div>
          </div>
          <div class="best-div">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/setting-icon.png" alt="" />
            <div>
              <h3><?php the_field('gps_searching_heading'); ?></h3>
              <?php the_field('gps_searching_content'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- happy client section -->
    <section class="happy-client-section">
    <?php the_field('happy_clients_heading'); ?>
      <div class="container">
      <?php
		            $args = array(
		              'post_type' => 'testimonials',
		              'numberposts' => -1,
		              'posts_per_page' => -1,
		               
		              
		              'order' => 'ASC'
		          );
		            $myquery = new WP_Query($args);
		              if($myquery->have_posts()) :
		                  while($myquery->have_posts()) :
		                     $myquery->the_post();
		          ?>
        <div class="client-1">
        <?php the_content(); ?>
        <?php the_post_thumbnail('full'); ?>
          <div>
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>
        <?php endwhile; endif; ?>
        
      </div>
    </section>
    <?php wp_reset_query(); ?>
    <!-- ready to call section -->
    <section class="ready-to-call">
      <h2><?php the_field('ready_to_call_heading'); ?></h2>
      <?php the_field('phone_number'); ?>
    </section>

    <!-- footer portion -->
    
<?php get_footer(); ?>