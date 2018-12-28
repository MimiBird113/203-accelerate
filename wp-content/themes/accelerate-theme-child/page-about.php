<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>

 	<div id="primary" class="about-page hero-content">
 		<div class="main-content" role="main">
 			<?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php
          $size = "full";
          $our_services = get_field('our_services');
          $services_description = get_field('services_description');
          $item_1 = get_field('item_1');
          $item_1_description = get_field('item_1_description');
          $image_one = get_field('image_one');
          $item_2 = get_field('item_2');
          $item_2_description = get_field('item_2_description');
          $image_two = get_field('image_two');
          $item_3 = get_field('item_3');
          $item_3_description = get_field('item_3_description');
          $image_three = get_field('image_three');
          $item_4 = get_field('item_4');
          $item_4_description = get_field('item_4_description');
          $image_four = get_field('image_four');
          $site_link = get_field('site_link');
        ?>


        <?php endwhile; // end of the loop. ?>

    </div><!-- #about-page hero -->
      </div>

  <section class="services">
    <div class="services-description">
      <p class="caps"><span class="caps"><strong><?php echo $our_services; ?></strong></span></p>
      <p><?php echo $services_description; ?></p>
    </div>

      <div class="services-items">
        <div class="item-1">
          <div class="about-image-1">
            <?php if($image_one) {
							echo wp_get_attachment_image( $image_one, $size );
						} ?>
  				</div>
          <div class="item-1-info">
  					<h2><?php echo $item_1; ?></h2>
  					<?php echo $item_1_description; ?>
  				</div>
        </div>

        <div class="item-2">
          <div class="about-image-2">
            <?php if($image_two) {
							echo wp_get_attachment_image( $image_two, $size );
						} ?>
  				</div>
  				<div class="item-2-info">
  					<h2><?php echo $item_2; ?></h2>
  					<?php echo $item_2_description; ?>
  				</div>
        </div>

        <div class="item-3">
          <div class="about-image-3">
            <?php if($image_three) {
							echo wp_get_attachment_image( $image_three, $size );
						} ?>
  				</div>
  				<div class="item-3-info">
  					<h2><?php echo $item_3; ?></h2>
  					<?php echo $item_3_description; ?>
  				</div>
        </div>

        <div class="item-4">
          <div class="about-image-4">
            <?php if($image_four) {
							echo wp_get_attachment_image( $image_four, $size );
						} ?>
  				</div>
  				<div class="item-4-info">
  					<h2><?php echo $item_4; ?></h2>
  					<?php echo $item_4_description; ?>
  				</div>
        </div>
      </div>


    </section>


    </div><!-- .main-content -->


 	</div><!-- #primary -->

  <nav id="navigation" class="container center">
    <p class="left"><strong>Interested in working with us?</strong></p>
		<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a></div>
	</nav>


 <?php get_footer(); ?>
