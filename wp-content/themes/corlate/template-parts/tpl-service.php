<?php 
/* Template Name: Service */
 ?>

 <?php 
 
 get_header();
 ?>

<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
               
                <h2><?php the_field('service_heading',11) ; ?></h2>
                <p class="lead"><?php the_field('service_description',11) ; ?></p>
            </div>

            <?php  get_template_part( 'template-parts/template/content', 'feature-query'); ?>


            <div class="get-started center wow fadeInDown">
                <h2><?php the_field('service_middle_content_title'); ?></h2>
                <p class="lead"><?php the_field('service_middle_content_description'); ?></p>
                <div class="request">
                    <h4><a href="#">Request a free Quote</a></h4>
                </div>
            </div><!--/.get-started-->

            <div class="clients-area center wow fadeInDown">
                <h2><?php the_field('service_last_content_title') ; ?></h2>
                <p class="lead"><?php the_field('service_last_content_description') ; ?></p>
            </div>

            <div class="row">
            <?php 
        $client_posttype_obj = new WP_Query(array('post_type'=>'client','posts_per_page'=>-1));
        if ($client_posttype_obj->have_posts()):
           while($client_posttype_obj->have_posts()):
           $client_posttype_obj->the_post();
        
    ?>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="<?php the_post_thumbnail_url();?>" class="img-circle" alt="">
                        <h3><?php the_content() ; ?></h3>
                        <h4><span>- <?php the_field('client_name') ; ?> /</span> <?php the_field('client_post') ; ?></h4>
                    </div>
                </div>
                <?php 
                endwhile;
                wp_reset_postdata();
            endif;
                ?>
           </div>

        </div><!--/.container-->
    </section><!--/#feature-->






 <?php  
 get_footer();
 
 ?>