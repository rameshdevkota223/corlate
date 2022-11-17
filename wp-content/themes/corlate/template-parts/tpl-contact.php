<?php 
/* Template Name: Contact */
get_header();
?>

    <section id="contact-info">
        <div class="center">                
            <h2><?php the_field('contact_info_heading') ; ?></h2>
            <p class="lead"><?php the_field('contact_info_description') ; ?></p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('map_url');?>"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <?php      
            $map_content_obj = new WP_Query(array('post_type'=>'map_content','posts_per_page'=>-1));
            if ($map_content_obj->have_posts()):
           while($map_content_obj->have_posts()):
           $map_content_obj->the_post() ;
            ?>
                            <li class="col-sm-6">
                                <address>
                                    <h5><?php the_field('address_heading'); ?></h5>
                                    <p><?php the_field('street_address'); ?></p>
                                    <p>Phone:<?php the_field('phon_number'); ?><br>
                                    Email Address:<?php the_field('email_address'); ?></p>
                                </address>

                                <address>
                                    <h5><?php the_field('zonal_office_heading'); ?></h5>
                                    <p><?php the_field('zonal_street_address'); ?></p>                                
                                    <p><?php the_field('zonal_phon_number'); ?><br>
                                    Email Address:<?php the_field('zonal_email_address'); ?></p>
                                </address>
                            </li>

                            <?php 
                endwhile;
                wp_reset_postdata();
            endif;
                ?>
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2><?php the_field('contact_page_title'); ?></h2>
                <p class="lead"><?php the_field('contact_page_description'); ?></p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                    <?php echo do_shortcode( '[contact-form-7 id="278" title="Contact form 1"]' ); ?>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php get_footer(); ?>