<div class="row">
            <?php 
        $work_posttype_obj = new WP_Query(array('post_type'=>'work','posts_per_page'=>8));
        if ($work_posttype_obj->have_posts()):
           while($work_posttype_obj->have_posts()):
           $work_posttype_obj->the_post();
        
    ?>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#"><?php the_title(); ?></a> </h3>
                                <p><?php the_content() ; ?></p>
                                <a class="preview" href="<?php the_post_thumbnail_url(); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <?php 
                endwhile;
                wp_reset_postdata();
            endif;
                ?>
   
            </div><!--/.row-->