<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->
        
    <footer>
        <div class="row wow fadeIn">
            <div class="col-3">
                <div class="circle"><a href="<?php bloginfo( 'siteurl' ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/img-falex.jpg" /></a></div>
                <h4>Falex Vidal</h4>
                <h5>UX Designer</h5>
            </div>
            <div class="col-3">
                <h4>Recent Works</h4>
                <ul>
                    <?php
                    $args = array( 'posts_per_page' => 5, 'order'=> 'ASC', 'orderby' => 'title', 'exclude' => '4' );
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ) :
                      setup_postdata( $post ); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php
                    endforeach; 
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <div class="col-3">
                <h4>Categories</h4>
                <ul>
                    <?php wp_list_categories('exclude=101&title_li='); ?> 
                </ul>
            </div>
            <div class="col-3">
                <h4><?php _e( 'Archives', 'twentyeleven' ); ?></h4>
                <ul>
                    <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                </ul>
            </div>
        </div>
        <div class="contents wow fadeIn">
            <a href="http://www.twitter.com/falexcartoonist" target="_blank" class="twitter"></a>
            <a href="https://www.youtube.com/channel/UCU5OF1LVHvy4nCQsFfxV5zg" target="_blank" class="youtube"></a>
            <a href="https://instagram.com/thedesignslayer/" target="_blank" class="instagram"></a>
            <a href="https://vimeo.com/falexvidal" target="_blank" class="vimeo"></a>
        </div>
    </footer>

    <div class="copyright">
        <div class="contents wow fadeIn">
            <p>copyright (c) 2015. All rights reserved. Theme by Falex Vidal.</p>
        </div>
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
</body>
</html>