<section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2><?php the_field('service_heading') ; ?></h2>
                <p class="lead"><?php the_field('service_description') ; ?></p>
            </div>

            <div class="row">
            <?php 
        $service_posttype_obj = new WP_Query(array('post_type'=>'service','posts_per_page'=>-1));
        if ($service_posttype_obj->have_posts()):
           while($service_posttype_obj->have_posts()):
           $service_posttype_obj->the_post();
        
    ?>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo the_post_thumbnail_url();?>">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php the_title() ; ?></h3>
                            <p><?php the_content() ; ?></p>
                        </div>
                    </div>
                </div>
                <?php 
                endwhile;
                wp_reset_postdata();
            endif;
                ?>

                                                           
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->