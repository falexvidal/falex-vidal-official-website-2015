<?php $query1 = new WP_Query( array('category_name=cover', 'posts_per_page'=>8) ); ?>

            <?php if ( $query1->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            <div class="featured-desc">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" class="arrow" /><?php the_title_attribute(); ?>
                                </a>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
                <!-- end of the loop -->
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>