<?php
//Shortcode for accordion
function create_shortcode_function_accordion($attr)
{
    $number = shortcode_atts(array(
        'pages' => '10',
    ), $attr);
  
    $sc = array(
        'post_type' => 'middle',
        'posts_per_page' => $number['pages'],

    ); ?>
    <div class="panel-group" id="accordion1">
            <div class="panel panel-default">
              <div class="panel-heading active">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                    <?php the_field('midlle_title'); ?>
                    <i class="fa fa-angle-right pull-right"></i>
                  </a>
                </h3>
              </div>

              <div id="collapseOne1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <div class="media accordion-inner">
                    <div class="pull-left">
                      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/accordion1.png" alt='#'>
                    </div>
                    <div class="media-body">
                      <h4><?php the_field('middle_inside_title'); ?></h4>
                      <p><?php the_field('middle_description'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            
            $middle_posttype_obj = new WP_Query($sc);
            if ($middle_posttype_obj->have_posts()) :
              while ($middle_posttype_obj->have_posts()) :
                $middle_posttype_obj->the_post();

            ?>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                        <?php the_title(); ?>
                        <i class="fa fa-angle-right pull-right"></i>
                      </a>
                    </h3>
                  </div>
                  <div id="collapseTwo1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
          <!--/#accordion1-->
<?php }
add_shortcode('create_shortcode_accordion', 'create_shortcode_function_accordion');
?>

<?php
/* Shortcode for Pricing */
function create_shortcode_function_pricing($attr)
{
    $number = shortcode_atts(array(
        'pages' => '10',
    ), $attr);
  
    $sc = array(
        'post_type' => 'pricing_area',
        'posts_per_page' => $number['pages'],

    ); ?>
   <div class="pricing-area text-center">
            <div class="row">
                <?php
                $i = 0;
                $pricing_area_obj = new WP_Query($sc);
                if ($pricing_area_obj->have_posts()) :
                    while ($pricing_area_obj->have_posts()) :
                        $pricing_area_obj->the_post();

                ?>

                        <div class=" <?php if ($i < 3) :
                                            echo "col-sm-4";
                                        else :
                                            echo "col-sm-6 col-md-3";
                                        endif;  ?> plan price-<?php global $post;
                        echo $post->post_name; ?> wow fadeInDown">
                            <?php the_post_thumbnail(); ?>
                            <ul>
                                <li class="heading-<?php global $post;
                                                    echo $post->post_name; ?>">
                                    <h1><?php the_title(); ?></h1>
                                    <span><?php the_field('price_per_month'); ?>/Month</span>
                                </li>
                                <li><?php the_field('disk_area'); ?> Disk Space</li>
                                <li><?php the_field('dediacted_ram'); ?> Dadicated Ram</li>
                                <li><?php the_field('addon_domain'); ?> Addon Domain</li>
                                <li><?php the_field('number_email_account'); ?> Email Account</li>
                                <li><?php the_field('support'); ?> Support</li>
                                <li class="plan-action">
                                    <a href="" class="btn btn-primary">Sign up</a>
                                </li>
                            </ul>
                        </div>
                <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
        <!--/pricing-area-->
<?php }
add_shortcode('create_shortcode_pricing', 'create_shortcode_function_pricing');
?>