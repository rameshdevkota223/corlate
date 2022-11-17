<?php
/* Template Name: pricing */
get_header();
?>

<section class="pricing-page">
    <div class="container">
        <div class="center">
            <h2><?php the_field('pricing_heading'); ?></h2>
            <p class="lead"><?php the_field('pricing_description'); ?></p>
        </div>
        <?php echo do_shortcode('[create_shortcode_pricing pages="7"]'); ?>
    </div>
    <!--/container-->
</section>
<!--/pricing-page-->

<?php get_footer(); ?>