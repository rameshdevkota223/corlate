<?php
/* Template Name: About Us */
?>
<?php get_header(); ?>

<section id="about-us">
	<div class="container">
		<div class="center wow fadeInDown">
			<h2><?php the_field('about_us_title'); ?></h2>
			<p class="lead"><?php the_field('about_us_description'); ?></p>
		</div>

		<!-- about us slider -->
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<?php
					$about_us_slider_posttype_obj = new WP_Query(array('post_type' => 'about_us_slider', 'post_per_page' => '-1'));
					if ($about_us_slider_posttype_obj->have_posts()) :
						while ($about_us_slider_posttype_obj->have_posts()) :
							$about_us_slider_posttype_obj->the_post();
					?>
							<div class="item">
								<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="">
							</div>

					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>

				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

				<a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			<!--/#carousel-slider-->
		</div>
		<!--/#about-slider-->


		<!-- Our Skill -->
		<div class="skill-wrap clearfix">

			<div class="center wow fadeInDown">
				<h2><?php the_field('about_us_service_title'); ?></h2>
				<p class="lead"><?php the_field('about_us_service_description'); ?></p>
			</div>

			<div class="row">
				<?php
				$our_skill_posttype_obj = new WP_Query(array('post_type' => 'our_skill', 'posts_per_page' => -1));
				if ($our_skill_posttype_obj->have_posts()) :
					while ($our_skill_posttype_obj->have_posts()) :
						$our_skill_posttype_obj->the_post();
				?>

						<div class="col-sm-3">
							<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
								<div class="<?php the_field('skill_class')?>">
									<p><em><?php the_excerpt(); ?></em></p>
									<p><?php the_title(); ?></p>
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
		<!--/.our-skill-->


		<!-- our-team -->
		<div class="team">
			<div class="center wow fadeInDown">
				<h2>Team of Corlate</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>

			<div class="row clearfix">
				<div class="col-md-4 col-sm-6">
					<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="media">
							<div class="pull-left">
								<a href="#"><img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/man1.jpg" alt=""></a>
							</div>
							<div class="media-body">
								<h4>Jhon Doe</h4>
								<h5>Founder and CEO</h5>
								<ul class="tag clearfix">
									<li class="btn"><a href="#">Web</a></li>
									<li class="btn"><a href="#">Ui</a></li>
									<li class="btn"><a href="#">Ux</a></li>
									<li class="btn"><a href="#">Photoshop</a></li>
								</ul>

								<ul class="social_icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/.media -->
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					</div>
				</div>
				<!--/.col-lg-4 -->


				<div class="col-md-4 col-sm-6 col-md-offset-2">
					<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="media">
							<div class="pull-left">
								<a href="#"><img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/man2.jpg" alt=""></a>
							</div>
							<div class="media-body">
								<h4>Jhon Doe</h4>
								<h5>Founder and CEO</h5>
								<ul class="tag clearfix">
									<li class="btn"><a href="#">Web</a></li>
									<li class="btn"><a href="#">Ui</a></li>
									<li class="btn"><a href="#">Ux</a></li>
									<li class="btn"><a href="#">Photoshop</a></li>
								</ul>
								<ul class="social_icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/.media -->
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					</div>
				</div>
				<!--/.col-lg-4 -->
			</div>
			<!--/.row -->
			<div class="row team-bar">
				<div class="first-one-arrow hidden-xs">
					<hr>
				</div>
				<div class="first-arrow hidden-xs">
					<hr> <i class="fa fa-angle-up"></i>
				</div>
				<div class="second-arrow hidden-xs">
					<hr> <i class="fa fa-angle-down"></i>
				</div>
				<div class="third-arrow hidden-xs">
					<hr> <i class="fa fa-angle-up"></i>
				</div>
				<div class="fourth-arrow hidden-xs">
					<hr> <i class="fa fa-angle-down"></i>
				</div>
			</div>
			<!--skill_border-->

			<div class="row clearfix">
				<div class="col-md-4 col-sm-6 col-md-offset-2">
					<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="media">
							<div class="pull-left">
								<a href="#"><img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/man3.jpg" alt=""></a>
							</div>

							<div class="media-body">
								<h4>Jhon Doe</h4>
								<h5>Founder and CEO</h5>
								<ul class="tag clearfix">
									<li class="btn"><a href="#">Web</a></li>
									<li class="btn"><a href="#">Ui</a></li>
									<li class="btn"><a href="#">Ux</a></li>
									<li class="btn"><a href="#">Photoshop</a></li>
								</ul>
								<ul class="social_icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/.media -->
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-md-offset-2">
					<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="media">
							<div class="pull-left">
								<a href="#"><img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/man4.jpg" alt=""></a>
							</div>
							<div class="media-body">
								<h4>Jhon Doe</h4>
								<h5>Founder and CEO</h5>
								<ul class="tag clearfix">
									<li class="btn"><a href="#">Web</a></li>
									<li class="btn"><a href="#">Ui</a></li>
									<li class="btn"><a href="#">Ux</a></li>
									<li class="btn"><a href="#">Photoshop</a></li>
								</ul>
								<ul class="social_icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/.media -->
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>
		<!--section-->
	</div>
	<!--/.container-->
</section>
<!--/about-us-->

<?php get_footer(); ?>