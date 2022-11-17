<div class="row">
                <div class="features">
                <?php 
        $feature_posttype_obj = new WP_Query(array('post_type'=>'feature','posts_per_page'=>6));
        if ($feature_posttype_obj->have_posts()):
           while($feature_posttype_obj->have_posts()):
           $feature_posttype_obj->the_post();
        
    ?>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="<?php the_field('icon_class')?>"></i>
                            <h2><?php the_title(); ?></h2>
                            <h3><?php the_content() ; ?></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
                    ?>
                </div><!--/.services-->
            </div><!--/.row-->   