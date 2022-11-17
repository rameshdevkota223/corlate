<?php 
/* Template Name: Portfolio */
 ?>

<?php get_header(); ?>

<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2><?php the_field('portfolio_heading') ; ?></h2>
               <p class="lead"><?php the_field('portfolio_description') ; ?> </p>
            </div>
        
		
            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <?php
$taxonomies_work = get_terms(array(
    'taxonomy' => 'work',
    'hide_empty' => false,
));
foreach ($taxonomies_work as $taxonomy) {
    ?>
	<li><a class="btn btn-default" href="#" data-filter=".<?php echo $taxonomy->slug ?>"><?php echo $taxonomy->name; ?></a></li>
 <?php
}
?>

<!--            <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
           -->  </ul>

            <!-- <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul>/#portfolio-filter -->

            <div class="row">
                <div class="portfolio-items">
                <?php 
        $work_posttype_obj = new WP_Query(array('post_type'=>'work','posts_per_page'=>-1));
        if ($work_posttype_obj->have_posts()):
           while($work_posttype_obj->have_posts()):
           $work_posttype_obj->the_post();
           
         
       
           ?>
        

                    <div class="portfolio-item <?php   $work_taxonomy = get_the_terms($post->ID, 'work');
       
       foreach ($work_taxonomy as $term) {
          echo ' '.$term->slug;
       
       } ?> apps col-xs-12 col-sm-4 col-md-3 ">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo the_post_thumbnail_url();?>" alt="">
                            <div class="overlay"> 
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php the_title() ; ?></a></h3>
                                    <p><?php the_content() ; ?></p>
                                    <a class="preview" href="<?php echo get_template_directory_uri();?>/images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    <?php 
                endwhile;
                wp_reset_postdata();
            endif;
                ?>
               
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->

<?php get_footer(); ?>