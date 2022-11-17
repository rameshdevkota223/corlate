<?php /* header */ ; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head><!--/head-->

<body class="homepage" <?php body_class(); ?> >
<?php wp_body_open(); ?>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  <?php echo get_bloginfo( 'name' ); ?></p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
					 
                            <ul class="social-share">
							<?php wp_nav_menu( array(
	                            'theme_location' => 'social menu',
								
                                 ) ); ?>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					
                    <a class="navbar-brand" href="index.html"><img src="<?php echo get_header_image();?>" alt="logo"></a>
                </div>
				<div class="collapse navbar-collapse navbar-right">
				<?php wp_nav_menu( array(
	                            'theme_location' => 'nav_menu',
								'menu_class' => 'nav navbar-nav',
                                 ) ); ?>
                </div>
				
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header>
