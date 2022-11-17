<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                <?php dynamic_sidebar('sidebar-1') ; } ?>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
                <?php dynamic_sidebar('sidebar-2') ; } ?>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                <?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
                <?php dynamic_sidebar('sidebar-3') ; } ?>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
                <?php dynamic_sidebar('sidebar-4') ; } ?>
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <?php echo get_theme_mod('footer-setting') ; ?>
                    <!-- &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved. -->
                </div>
                <div class="col-sm-6">
                <?php wp_nav_menu( array(
	                            'theme_location' => 'footer_nav_menu',
                                'menu_class' => 'pull-right',
								
                                 ) ); ?>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->


	<?php wp_footer() ; ?>
</body>
</html>