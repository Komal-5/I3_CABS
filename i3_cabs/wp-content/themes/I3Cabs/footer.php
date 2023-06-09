<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>


	<footer>
      <div class="footer-div">
        <div class="container">
          <div class="links">
            <div class="quick-link">
              <h3>QUICK LINKS</h3>
              <hr />
              <?php wp_nav_menu( array( 'menu_class' => 'navigation', 'container' => false, 'theme_location' => 'quick-links' ) ); ?>
            </div>
            <div class="services">
              <h3>SERVICES</h3>
              <hr />
              <ul>
                <li>Airport Services</li>
                <li>Corporate Taxes</li>
                <li>Tours Services</li>
                <li>Parcel Delivery</li>
              </ul>
            </div>
            <div class="contact">
              <h3>CONTACT</h3>
              <hr />
			  
              <?php if ( is_active_sidebar( 'footer-contact' ) ) : ?>
	                    <?php dynamic_sidebar( 'footer-contact' ); ?>
	                <?php endif; ?>
              <div class="icons">
			  <?php if ( is_active_sidebar( 'footer-icons' ) ) : ?>
	                    <?php dynamic_sidebar( 'footer-icons' ); ?>
	                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>
          Copyright &copy; 2023 l3Cabs. All rights reserved.Design & Developed
          by: Web Desk Pty Ltd.
        </p>
      </div>
    </footer>
	
<?php wp_footer(); ?>

</body>
</html>
