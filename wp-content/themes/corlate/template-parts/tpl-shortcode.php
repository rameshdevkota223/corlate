<?php /* Template Name: Short Code */ ?>
<?php get_header(); ?>
<section id="content" class="shortcode-item">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                <h2><?php the_field('short_code_left_title'); ?> </h2>
                <?php
                /* tabwrap part start*/
                get_template_part('template-parts/template/content', 'tabwrap');
                /* tabwrap part end*/; ?>             
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-5">
                    <h2><?php the_field('short_code_right_title') ; ?></h2>
                    <div class="accordion">
                       <?php echo do_shortcode('[create_shortcode_accordion pages="2"]'); ?>
                       
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->
    

    <section class="pricing-area shortcode-item">
        <div class="container">
            <h2><?php the_field('pages_gallery') ; ?></h2>
            <?php echo do_shortcode('[create_shortcode_pricing pages="3"]'); ?>
        </div>
    </section><!--/pricing_area-->

    <section id="recent-works" class="shortcode-item">
        <div class="container">
            <h2><?php the_field('pages_gallery') ; ?></h2>
            <?php get_template_part('template-parts/template/content-recentwork','row') ; ?>
        </div>
    </section><!--/#portfolio-->
<?php get_footer(); ?>