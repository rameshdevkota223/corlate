<section id="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 wow fadeInDown">
        <div class="skill">
          <h2><?php the_field('skill_heading'); ?></h2>
          <p><?php the_field('heading_description'); ?></p>
          <?php
          $skill_posttype_obj = new WP_Query(array('post_type' => 'skill', 'posts_per_page' => -1));
          if ($skill_posttype_obj->have_posts()) :
            while ($skill_posttype_obj->have_posts()) :
              $skill_posttype_obj->the_post();

          ?>
              <div class="progress-wrap">
                <h3><?php the_title(); ?></h3>
                <div class="progress">
                  <div class="progress-bar  <?php the_field('skill_color'); ?>" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('skill_field'); ?>">
                    <span class="bar-width"><?php the_field('skill_field'); ?></span>
                  </div>

                </div>
              </div>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>

        </div>

      </div>
      <!--/.col-sm-6-->

      <div class="col-sm-6 wow fadeInDown">
        <div class="accordion">
          <h2><?php the_field('middle_heading'); ?></h2>
          <?php echo do_shortcode('[create_shortcode_accordion pages="3"]'); ?>
        </div>
      </div>

    </div>
    <!--/.row-->
  </div>
  <!--/.container-->
</section>
<!--/#middle-->