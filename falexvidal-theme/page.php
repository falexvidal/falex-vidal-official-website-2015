<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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