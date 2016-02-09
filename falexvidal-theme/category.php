<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section>
			<article>

			<?php if ( have_posts() ) : ?>

					<?php
						printf( __( 'Category Archives: %s', 'twentyeleven' ), '<h2>' . single_cat_title( '', false ) . '</h2>' );
					?>

					<?php
						$category_description = category_description();
						if ( ! empty( $category_description ) ) {
							/**
							 * Filter the default Twenty Eleven category description.
							 *
							 * @since Twenty Eleven 1.0
							 *
							 * @param string The default category description HTML.
							 */
							echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
						}
					?>

				<?php /* Start the Loop */ ?>
                
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                    <!--<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>-->
                <?php endwhile; endif; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h2>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</article><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>
