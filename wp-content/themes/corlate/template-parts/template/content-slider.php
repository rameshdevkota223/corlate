<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <?php 
        $slide_posttype_obj = new WP_Query(array('post_type'=>'slide','posts_per_page'=>-1));
        if ($slide_posttype_obj->have_posts()):
           while($slide_posttype_obj->have_posts()):
           $slide_posttype_obj->the_post();
        
    ?>
    

                <div class="item" style="background-image: url(<?php echo the_field('slider'); ?>)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><?php the_title(); ?></h1>
                                    <h2 class="animation animated-item-2"><?php the_excerpt(); ?></h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo the_post_thumbnail_url();?>"  class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                <?php 
                endwhile;
                wp_reset_postdata();
            endif;
                ?>

                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->