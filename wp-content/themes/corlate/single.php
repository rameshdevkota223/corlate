<?php get_header(); ?>


<section id="blog" class="container">
    <div class="center">
        <h2><?php the_field('blog_title', 21); ?></h2>
        <p class="lead"><?php the_field('blog_description', 21); ?></p>
    </div>
    <?php

    if (have_posts()) :
        while (have_posts()) :
            the_post();

    ?>
            <div class="blog">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-item">
                            <img class="img-responsive img-blog" src="<?php echo the_post_thumbnail_url(); ?>" width="100%" alt="" />
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php echo get_the_date(); ?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"><?php echo get_the_author_meta('first_name'); ?></a></span>
                                        <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"> <?php echo get_comments_number(); ?> Comments</a></span>
                                        <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                    <div class="post-tags">
                                        <strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/.blog-item-->

                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <?php $auther_id = get_the_author_meta('ID');

                                ?>
                                <a href="#"><img src="<?php echo get_avatar_url($auther_id); ?>" class="img-circle" alt="" /></a>
                                <ul>
                                    <?php $user_id = get_current_user_id(); ?>
                                    <li><a target="_blank" href="<?php the_field('facebook_link', 'user_' . $user_id); ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="<?php the_field('twitter_link', 'user_' . $user_id); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="<?php the_field('google_link', 'user_' . $user_id); ?>"><i class="fa fa-google-plus"></i> </a></li>
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3><?php echo get_the_author_meta('first_name'); ?></h3>
                                <p class="lead"><?php echo nl2br(get_the_author_meta('description')); ?></p>
                                <p><strong>Web:</strong> <a href="#"><?php the_author_meta('url'); ?></a></p>
                            </div>
                        </div>

                        <h1 id="comments_title"><?php echo get_comments_number(); ?> Comments</h1>
                        <?php
                        $comments = get_comments(get_the_ID());
                        foreach ($comments as $comment) {
                        ?>
                            <div class="media comment_section">
                                <div class="pull-left post_comments">
                                    <a href="#"><?php echo get_avatar($comment->user_id, 100); ?></a>
                                </div>
                                <div class="media-body post_reply_comments">
                                    <h3><?php echo $comment->comment_author; ?></h3>
                                    <h4><?php comment_date('n-j-Y'); ?></h4>
                                    <p><?php echo $comment->comment_content; ?></p>
                                    <a href="#">Reply</a>
                                </div>
                            </div>

                        <?php }
                        ?>
                        <div id="contact-page clearfix">
                            <?php comment_form(); ?>
                        </div>
                        <!--/#contact-page-->
                    </div>
                    <!--/.col-md-8-->

                    <aside class="col-md-4">
                        <div class="widget search">
                            <form role="form">
                                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                            </form>
                        </div>
                        <!--/.search-->

                        <div class="widget categories">
                            <h3>Recent Comments</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    $args = array(
                                        'user_id' => 1, // use user_id
                                        'number'  => '3',
                                    );
                                    $comments = get_comments($args);
                                    foreach ($comments as $comment) {
                                    ?>
                                        <div class="single_comments">
                                            <?php echo get_avatar($comment->user_id, 54); ?>
                                            <p><?php echo $comment->comment_content; ?> </p>
                                            <div class="entry-meta small muted">
                                                <span>By <a href="#"><?php echo $comment->comment_author; ?></a></span <span>On <a href="#">Creative</a></span>
                                            </div>
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--/.recent comments-->

                        <div class="widget categories">
                            <h3>Categories</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="blog_category">
                                        <?php
                                        wp_list_categories(array(
                                            'orderby' => 'id',
                                            'show_count' => true,
                                            'title_li' => '',

                                        )); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/.categories-->

                        <div class="widget archieve">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="blog_archieve">
                                        <?php
                                        dynamic_sidebar('sidebar-5');
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/.archieve-->

                        <div class="widget tags">
                    <h3>Tag Cloud</h3>
                    <ul class="tag-cloud">
                        <?php
                        $tags = get_tags();
                        if ($tags) :
                            foreach ($tags as $tag) : ?>
                                <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </div>
                        <!--/.tags-->

                     
                <div class="widget blog_gallery">
                    <!-- <h3>Our Gallery</h3> -->
                    <?php
                dynamic_sidebar('sidebar-6');
                ?>
                </div>
                <!--/.blog_gallery-->


                    </aside>

                </div>
                <!--/.row-->

            </div>
            <!--/.blog-->
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>

</section>
<!--/#blog-->

<?php get_footer(); ?>