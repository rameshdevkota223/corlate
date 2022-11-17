<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 wow fadeInDown">
                <?php
                /* tabwrap part start*/
                get_template_part('template-parts/template/content', 'tabwrap');
                /* tabwrap part end*/; ?>
            </div>
            <!--/.col-sm-6-->

            <div class="col-xs-12 col-sm-4 wow fadeInDown">
                <div class="testimonial">
                    <h2><?php the_field('content_title'); ?></h2>
                    <?php
                    $content_posttype_obj = new WP_Query(array('post_type' => 'content', 'posts_per_page' => -1));
                    if ($content_posttype_obj->have_posts()) :
                        while ($content_posttype_obj->have_posts()) :
                            $content_posttype_obj->the_post();

                    ?>
                            <div class="media testimonial-inner">
                                <div class="pull-left">
                                    <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/images/testimonials1.png"> 
                                </div>
                                <div class="media-body">
                                    <p><?php the_content(); ?></p>
                                    <span><strong>-<?php the_field('content_author_name'); ?>/</strong> <?php the_field('author_post'); ?></span>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>

        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->