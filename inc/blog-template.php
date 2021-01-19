<?php
/* Template Name:Blog Template */
get_header();
?>


<section class="home-slider owl-carousel">
    <?php 
       $args=array(
			'post_type' => 'caresole',
			'post_per_page'=>1
        );
        $tech_posts= new WP_Query( $args );
if ( $tech_posts->have_posts() ) : 
    while ( $tech_posts->have_posts() ) :$tech_posts->the_post(); 
    ?>
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(6), 'full' );?>
    <div class="slider-item bread-item" style="background-image: url('<?php echo $thumb['0'];?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
                <div class="col-md-7 col-sm-12  mb-5">
                    <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                            class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
                    <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Read Our Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////// -->
    <?php 
    endwhile; 
endif; 
?>
    <!-- ///////////////////// -->
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php 
                                  $args=array(
                                    'post_type' => 'myblog',
                                    'posts_per_archive_page'=>3
                                );
                                 $pricing= new WP_Query( $args );
                                 if ($pricing->have_posts()) :
                                    while ($pricing->have_posts()) :$pricing-> the_post();
                              ?>
                    <div class="col-md-12 ">
                        <div class="blog-entry">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );?>
                            <a href="blog-single.html" class="block-20"
                                style="background-image: url('<?php echo $image['0'] ?>');">
                            </a>
                            <div class="text d-flex py-4">
                                <div class="meta mb-3">
                           <div><a href="#"><?php echo get_the_time('F j, Y', $post->ID); ?></a></div>
                            <div><a href="#"><?php echo the_author_meta( 'user_nicename' ,$post->post_author );  ?></a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span><?php echo get_comments_number($post->ID ) ;?></a></div>
                                </div>
                                <div class="desc pl-sm-3 pl-md-5">
                                    <h3 class="heading"><a
                                            href="<?php echo  get_the_permalink(); ?>"><?php the_title( ); ?></a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <!-- <p><a href="blog-single.html" class="btn btn-primary btn-outline-primary">Read
                                            more</a></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="block-27">
                            <?php echo paginate_links( ); ?>
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- END: col-md-8 -->
            <div class="col-md-4 sidebar "> 
            <?php dynamic_sidebar('sidebar-main');?>
        </div>
    </div>
</section>


</body>
<?php
get_footer( );
?>

</html>