<?php
get_header();

/* Template Name:Demo Template */
$page_title=get_the_title();
?>
<!-- content  -->



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
                            class="mr-2"><a href="index.html">Home</a></span> <span><?php echo $page_title;  ?></span></p>
                    <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">
                    <!-- ///============  =====================/// -->
                    <?php echo get_theme_mod( 'services_banner_header','Our Service Keeps you Smile');
                       ?>

                    </h1>
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


		
 <!-- ///////////////////////////////////////////////////// -->
 <?php
                $args=array(
                    'post_type' => 'services',
                    'posts_per_archive_page'=>8
                );
                 $tech_posts= new WP_Query( $args );
                
 ?>


<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section">
                <h2 class="mb-2">
                    <?php echo get_theme_mod( 'mh_home_blog_header_label-1','Our Service Keeps you Smile'); ?></h2>
                <p><?php echo get_theme_mod( 'mh_home_blog_header_label-1','A small river named Duden flows by their place and supplies it with the necessary regelialia.'); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php
		if ($tech_posts->have_posts()) :
                    while ($tech_posts->have_posts()) :$tech_posts-> the_post();  
          ?>
            <div class="col-md-3 d-flex align-self-stretch ">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-tooth-1"></span>
                    </div>
                    <div class="media-body p-2 mt-3">

                        <h3 class="heading"><a href="<?php the_permalink( ) ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
                endif;
                ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>        
 <!-- /////////////////////////////////////////// -->
 <section class="ftco-section ftco-counter img" id="section-counter"
    style="background-image: url(<?php echo get_theme_mod('achivement_background_image','/images/bg_1.jpg'); ?>);background-attachment: fixed;"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-3 aside-stretch py-5">
                <div class=" heading-section heading-section-white  pr-md-4">
                    <h2 class="mb-3"><?php echo get_theme_mod( 'mh_achivement_header_label','achivement'); ?></h2>
                    <p><?php echo get_theme_mod( 'mh_achivement2_discription_label','A small river named Duden flows by their place and supplies it with the necessary regelialia.'); ?>
                    </p>
                </div>
            </div>
            <div class="col-md-9 py-5 pl-md-5">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number"
                                    data-number="14"><?php echo get_theme_mod( 'mh_achivementsub_section1_label','12'); ?></strong>
                                <span>Years of Experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number"
                                    data-number="4500"><?php echo get_theme_mod( 'mh_achivementsub_section2_label','4500'); ?></strong>
                                <span>Qualified Dentist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number"
                                    data-number="4200"><?php echo get_theme_mod( 'mh_achivementsub_section3_label','420'); ?></strong>
                                <span>Happy Smiling Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number"
                                    data-number="320"><?php echo get_theme_mod( 'mh_achivementsub_section1_label','25000'); ?></strong>
                                <span>Patients Per Year</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- ////////////////////////////////////////// -->
    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ">
            <h2 class="mb-3"><?php echo get_theme_mod( 'pricing_section_header', 'Our Best Pricing' ) ?></h2>
            <p><?php echo get_theme_mod( 'pricing_section_discription', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.' ) ?></p>
            </div>
        </div>

        <div class="row">
            <?php
                  $args=array(
					'post_type' => 'pricing',
					'posts_per_archive_page'=>4
				);
				 $pricing= new WP_Query( $args );
				 if ($pricing->have_posts()) :
					while ($pricing->have_posts()) :$pricing-> the_post();  
					global $post;
					// var_dump($post);
					// $post_id=$post->ID;
					// $id=get_the_ID();
					// var_dump($post_id);
					$feature_1=get_post_meta( get_the_ID(), 'typeyoururl_211', true );
					$feature_2=get_post_meta( get_the_ID(), 'typeyoururl_211', true );
					$feature_3=get_post_meta( get_the_ID(), 'typeyoururl_212', true );
					$feature_4=get_post_meta( get_the_ID(), 'typeyoururl_213', true );
					$feature_5=get_post_meta( get_the_ID(), 'typeyoururl_214', true );
					$price=get_post_meta( get_the_ID(), 'typeyoururl_215', true );
					
					// var_dump($feature_1);
					// $postid=$post->ID;
				?>
            <div class="col-md-3 ">
                <div class="pricing-entry pb-5 text-center">
                    <div>
                        <h3 class="mb-4"><?php the_title(); ?></h3>
                        <p><span class="price">$<?php echo $price;  ?></span> <span class="per">/ session</span></p>
                    </div>
                    <ul>
                        <li><?php echo $feature_1; ?></li>
                        <li><?php echo $feature_2; ?></li>
                        <li><?php echo $feature_3; ?></li>
                        <li><?php echo $feature_4; ?></li>
                        <li><?php echo $feature_5; ?></li>
                    </ul>
                    <p class="button text-center"><a href="#"
                            class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
                </div>
            </div>

            <?php
                    endwhile;
                endif;
                ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>



<!-- content end -->
<?php
get_footer();
?>