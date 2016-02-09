<?php
/**
 * Template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section>
			<article>
                
                <?php if ( is_month() ) : ?>
                    <?php printf( __( 'Monthly Archives: %s', 'twentyeleven' ), '<h2>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyeleven' ) ) . '</h2>' ); ?>
                <?php else : ?>
                    <?php _e( 'Blog Archives', 'twentyeleven' ); ?>
                <?php endif; ?>
                
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                    <!--<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>-->
                <?php endwhile; endif; ?>

			</article><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>