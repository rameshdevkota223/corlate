<section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2><?php the_field('partner_title');?></h2>
                <p class="lead"><?php the_field('partner_desscription');?></p>
            </div>    

            <div class="partners">
                <ul>
                <?php 
        $partner_posttype_obj = new WP_Query(array('post_type'=>'partner','posts_per_page'=>9));
        if ($partner_posttype_obj->have_posts()):
           while($partner_posttype_obj->have_posts()):
           $partner_posttype_obj->the_post();
        
    ?>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php the_field('partner_image')?>"></a></li>
                    <?php 
                endwhile;
                wp_reset_postdata();
            endif;
                ?>
                
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->