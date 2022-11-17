<?php
get_header();
?>


<section id="blog" class="container">
    <div class="center">
        <h2><?php the_field('blog_title', 21); ?></h2>
        <p class="lead"><?php the_field('blog_description', 21); ?></p>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <?php
                $post_posttype_obj = new WP_Query(array('post_type' => 'post'));
                if ($post_posttype_obj->have_posts()) :
                    while ($post_posttype_obj->have_posts()) :
                        $post_posttype_obj->the_post();

                ?>
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php echo get_the_date(); ?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"><?php echo get_author_name(); ?></a></span>
                                        <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><?php echo get_comments_number(); ?> Comments</a></span>
                                        <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <a href="#"><img class="img-responsive img-blog" src="<?php the_post_thumbnail_url(); ?>" width="100%" alt="" /></a>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <h3><?php the_excerpt(); ?></h3>
                                    <a class="btn btn-primary readmore" href="<?php echo the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/.blog-item-->
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
               
//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
	'post_type' => 'post',
);

$the_query = new WP_Query( $args );
?>
<ul class="pagination pagination-lg">
<?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $the_query->max_num_pages,
    'prev_text'    => sprintf( '<i class="fa fa-long-arrow-left"></i> %1$s', __( 'Previous Page', 'corlate' ) ),
    'next_text'    => sprintf( '%1$s <i class="fa fa-long-arrow-right"></i>', __( 'Next Page', 'corlate' ) ),
) );
?>
 </ul>

                <!--/.pagination-->
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
                                    'hide_empty' => true,

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
</section>
<!--/#blog-->

<?php get_footer(); ?>