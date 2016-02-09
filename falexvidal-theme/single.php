<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section>
			<article>
                
                
                <?php
                    if ( have_posts() ) {
	                   while ( have_posts() ) {

		                  the_post(); ?>

                        <h2 class="wow fadeIn"><?php the_title(); ?></h2>

                        <div class="text wow fadeIn">
                            <?php the_content(); ?>
                        </div>

	               <?php }
                    }
                ?>

			</article><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>