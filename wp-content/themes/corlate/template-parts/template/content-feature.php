<section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2><?php the_field('feature') ; ?></h2>
                <p class="lead"></p><?php the_field('feature_description') ; ?></p>
            </div>
          <?php  get_template_part( 'template-parts/template/content', 'feature-query'); ?>
            
        </div><!--/.container-->
    </section><!--/#feature-->