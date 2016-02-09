<?php get_header(); ?>

        <div id="gallery">

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

        </div>

        <div class="container contact">
            <hgroup>
                <h2 class="wow fadeIn">Have Any Questions? Drop Me a Line!</h2>
                <h3 class="wow fadeIn">Please fill in the form below. I’ll get back to you as soon as possible!</h3>
            </hgroup>
                <?php echo do_shortcode( '[contact-form-7 id="38" title="Contact form 1"]' ); ?>
            </div>
        </div>

        <div class="container newsletter wow fadeIn">
            <div class="contents wow fadeIn">
                <h2>Sign My Newsletter</h2>
                <h3>Receive News in Advance</h3>
                <div class="widget_wysija_cont html_wysija">
                    <div id="msg-form-wysija-html54f509cf5f711-1" class="wysija-msg ajax"></div>
                        <form id="form-wysija-html54f509cf5f711-1" method="post" action="#wysija" class="widget_wysija html_wysija">
                            <p class="wysija-paragraph">
                                <!--<label>Email <span class="wysija-required">*</span></label>-->
                                <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Email"  value="Your E-mail" />
                                <span class="abs-req">
                                    <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
                                </span>
                            </p>
                            <input class="wysija-submit wysija-submit-field" type="submit" value="Subscribe" />
                            <input type="hidden" name="form_id" value="1" />
                            <input type="hidden" name="action" value="save" />
                            <input type="hidden" name="controller" value="subscribers" />
                            <input type="hidden" value="1" name="wysija-page" />
                            <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
                        </form>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>