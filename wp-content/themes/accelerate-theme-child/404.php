<?php
/**
 * The template for displaying the 404 page.
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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
				<?php the_title(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

        <article id="not-found">
          <figure class="nope-img">
            <img src="http://localhost/accelerate/wp-content/uploads/2019/01/map.png">
          </figure>
          <div class="oops">
          <h2>Whoops, Took a Wrong Turn...</h2>
          <p>Sorry, this page no longer exists, never existed, or has been moved.</p>
          <p>Or, if you're really unlucky, exists in a pocket dimension forbidden to you.</p>
          <p>It's not your fault. It happens.</p>
          <p>We feel like complete jerks for misleading you.</p>
          <p>Feel free to take a look around our <a href="localhost/accelerate/blog">blog</a> or some of our <a href="localhost/accelerate/case-studies">featured work</a> to cheer you up.</p>
          </div>
        </article>


		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
