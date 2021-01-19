<?php
// this template display About Page content
get_header();
?>
<!-- ///////////////////////////////---------------------------//////////////////// -->
<!-- start custom api style  -->
<style>
.ftco-intro .color-1{
    background:<?php echo get_theme_mod( 'mh_banner_cart_color_col1', '#2cbcbc' ) ?>;
}
.ftco-intro .color-2{
    background:<?php echo get_theme_mod( 'mh_banner_cart_color_col2', '#2#21aac4' ) ?>;
}
.ftco-intro .color-3{
 background:linear-gradient(135deg, <?php echo get_theme_mod( 'mh_banner_cart_color_col3', '#2f89fc' ) ?> 0%, #2cbcbc 100%);
}
.btn.btn-primary{
  background:<?php echo get_theme_mod('mh_home_button_background_color', '#2f89fc') ?>;
}
.about-wrap,.aside-stretch,.ftco-section-parallax,.ftco-section-parallax ,.aside-stretch:after {
 background:<?php echo get_theme_mod('mh_themecommon_color', '#2f89fc') ?>;
}
.ftco-section-parallax {
background: -webkit-linear-gradient(315deg, <?php echo get_theme_mod('mh_themecommon_color', '#2f89fc') ?> 0%, #2cbcbc 100%)!important;
}
</style>
<!-- custom api style  -->
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
    <!-- // Display post content -->
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(6), 'full' );?>
    <div class="slider-item" style="background-image: url('<?php echo $thumb['0'];?>');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <div class="col-md-6 col-sm-12 " data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <?php
                     echo get_theme_mod( 'home_bannertext_header', 'Modern Dentistry in a Calm and Relaxed Environment')
                    ?>
                    </h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <?php 
                     echo get_theme_mod( 'home_bannertext_discription', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.' )
                    ?>
                    </p>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#"
                            class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- ////end of loop  -->
    <?php 
    endwhile; 
endif; 
?>
</section>

<!-- ///////////////////////////////////------------------////////////////////////////////// -->



<!-- <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Achieve Your Desired Perfect Smile</h1>
              <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
            </div>
          </div>
        </div>
      </div> -->

<section class="ftco-intro">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 color-1 p-4">
                <h3 class="mb-4"><?php echo get_theme_mod( 'home_bannerpart1_setting_header', 'Emergency Cases' ) ?></h3>
                <p><?php echo get_theme_mod( 'home_bannerpart1_setting_discription', 'A small river named Duden flows by their place and supplies' )  ?></p>
                <span class="phone-number"><a style="color:white;" href='tel:<?php get_theme_mod( 'home_bannerpart1_setting_phone_number', '9925566233' ) ?>'><?php echo get_theme_mod( 'home_bannerpart1_setting_phone_number','9925566233')  ?></a></span>
            </div>
            <div class="col-md-3 color-2 p-4">
                <h3 class="mb-4"><?php echo get_theme_mod( 'home_bannerpart2_setting_header', 'Opening Hours' ) ?></h3>
                <p class="openinghours d-flex">
                    <span><?php echo get_theme_mod( 'home_bannerpart2_dayline_1', 'Monday-Friday'); ?></span>
                    <span><?php echo get_theme_mod( 'home_bannerpart2_timeline_1', '8:00-19:00' ) ?></span>
                </p>
                <p class="openinghours d-flex">
                    <span><?php echo get_theme_mod( 'home_bannerpart2_dayline_2', 'saturday' ); ?></span>
                    <span><?php echo get_theme_mod( 'home_bannerpart2_timeline_2', '10:00-17:00' ) ?></span>
                </p>
                <p class="openinghours d-flex">
                    <span><?php echo get_theme_mod( 'home_bannerpart2_dayline_2', 'sunday' )  ?></span>
                    <span><?php  echo get_theme_mod( 'home_bannerpart2_timeline_3', '10:00-16:00' ) ?></span>
                </p>
            </div>
            <div class="col-md-6 color-3 p-4">
                <h3 class="mb-2">Make an Appointment</h3>
                <form action="#" class="appointment-form">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Department</option>
                                        <option value="">Teeth Whitening</option>
                                        <option value="">Teeth CLeaning</option>
                                        <option value="">Quality Brackets</option>
                                        <option value="">Modern Anesthetic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-user"></span></div>
                                <input type="text" class="form-control" id="appointment_name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-paper-plane"></span></div>
                                <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="ion-ios-calendar"></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Date">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="text" class="form-control appointment_time" placeholder="Time">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-phone2"></span></div>
                                <input type="text" class="form-control" id="phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Make an Appointment" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
                $args=array(
                    'post_type' => 'services',
                    'posts_per_archive_page'=>4
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


    <!-- ///////////////////////////////////////////////////////////////////////////////// -->
    <div class="container-wrap mt-5">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 img" style="background-image: url(<?php echo get_theme_mod('doctorintro_image'); ?>);">
            </div>
            <div class="col-md-6 d-flex">
                <div class="about-wrap">
                    <div class="heading-section heading-section-white mb-5 ">
                        <h2 class="mb-2">
                            <?php echo get_theme_mod( 'mh_doctorintro_header_label','Dentacare with a personal touch'); ?>
                        </h2>
                        <p><?php echo get_theme_mod( 'mh_doctorintro_discription_label','A small river named Duden flows by their place and supplies it with the necessary regelialia.'); ?>
                        </p>
                    </div>
                    <div class="list-services d-flex ">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3><?php echo get_theme_mod( 'mh_doctorintro_point1_header','Well Experience Dentist'); ?>
                            </h3>
                            <p><?php echo get_theme_mod( 'mh_doctorintro_point1_discription','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="list-services d-flex ">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3><?php echo get_theme_mod( 'mh_doctorintro_point2_header','High Technology Facilities'); ?>
                            </h3>
                            <p><?php echo get_theme_mod( 'mh_doctorintro_point2_discription','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="list-services d-flex ">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3><?php echo get_theme_mod( 'mh_doctorintro_point3_header','Comfortable Clinics'); ?></h3>
                            <p><?php echo get_theme_mod( 'mh_doctorintro_point3_discription','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ">
                <h2 class="mb-3"><?php echo get_theme_mod( 'mh_ourteam_header_label','Meet Our Experience Dentist'); ?>
                </h2>
                <p><?php echo get_theme_mod( 'mh_ourteam_discription_label','A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences'); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php
               $args=array(
				'post_type' => 'ourteam',
				'posts_per_archive_page'=>4
			);
			 $ourteam= new WP_Query( $args );
			 if ($ourteam->have_posts()) :
				while ($ourteam->have_posts()) :$ourteam-> the_post();  
				global $post;
				$id=get_the_ID();
				$postid=$post->ID;
            ?>
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ">
                <div class="staff">
                    <?php $member = wp_get_attachment_image_src( get_post_thumbnail_id($postid), 'full' );?>
                    <div class="img mb-4" style="background-image: url(<?php echo $member['0'];?>);"></div>
                    <div class="info text-center">
                        <h3><a href="teacher-single.html"><?php the_title(); ?></a></h3>
                        <span class="position">Dentist</span>
                        <div class="text">
                            <p><?php the_excerpt(); ?></p>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            </ul>
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
        <div class="row  mt-5 justify-conten-center">
            <div class="col-md-8 ">
                <p><?php echo get_theme_mod( 'mh_ourteam_achivement_label','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut accusamus. Animi, quo. Laboriosam, laborum.'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

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

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ">
                    <h2><?php echo get_theme_mod( 'mh_subscription_header','Subcribe to our Newsletter'); ?></h2>
                    <p><?php echo get_theme_mod( 'mh_subscription_discription','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in'); ?>
                    </p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <div class="caresole container">
    <h1 class="">Projects </h1> -->
<!-- Set up your HTML -->
<!-- <div class="owl-carousel">
         <div class='item'>
		 <h1>hello welcome slider </h1>
		 </div>
		 <div class='item'>
		 <h1>hello welcome slider </h1>
		 </div><div class='item'>
		 <h1>hello welcome slider </h1>
		 </div><div class='item'>
		 <h1>hello welcome slider </h1>
		 </div><div class='item'>
		 <h1>hello welcome slider </h1>
		 </div><div class='item'>
		 <h1>hello welcome slider </h1>
		 </div><div class='item'>
		 <h1>hello welcome slider </h1>
		 </div>
    </div>

</div> -->

<!-- 
<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ">
            <h2 class="mb-2">Testimony</h2>
            <span class="subheading">Our Happy Customer Says</span>
          </div>
        </div>
        <div class="row justify-content-center ">
          <div class="col-md-8">
            <div class="carousel-testimony1 owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ">
                <a href="#" class="gallery img d-flex align-items-center"
                    style="background-image: url(<?php echo get_theme_mod('gallary1_image','/images/gallery-1.jpg'); ?>);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ">
                <a href="#" class="gallery img d-flex align-items-center"
                    style="background-image: url(<?php echo get_theme_mod('gallary2_image','/images/gallery-2.jpg'); ?>);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ">
                <a href="#" class="gallery img d-flex align-items-center"
                    style="background-image: url(<?php echo get_theme_mod('gallary3_image','/images/gallery-3.jpg'); ?>);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ">
                <a href="#" class="gallery img d-flex align-items-center"
                    style="background-image: url(<?php echo get_theme_mod('gallary4_image','/images/gallery-4.jpg'); ?>);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ">
                <h2 class="mb-2"><?php echo get_theme_mod( 'mh_blog_header','Latest Blog'); ?></h2>
                <p><?php echo get_theme_mod( 'mh_blog_discription','A small river named Duden flows by their place and supplies it with the necessary regelialia.'); ?></p>
            </div>
        </div>
        <div class="row">
        <!-- //////////////////////// -->
        <?php
        $args=array(
					'post_type' => 'myblog',
					'posts_per_archive_page'=>3
				);
				 $pricing= new WP_Query( $args );
				 if ($pricing->have_posts()) :
					while ($pricing->have_posts()) :$pricing-> the_post();
            ?>
       <!-- ////////////////// -->
            <div class="col-md-4 ">
                <div class="blog-entry">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );?>
                    <a href="blog-single.html" class="block-20" style="background-image: url(<?php echo $image['0']; ?>);">
                    </a>
                    <div class="text d-flex py-4">
                        <div class="meta mb-3">
                            <div><a href="#"><?php echo get_the_time('F j, Y', $post->ID); ?></a></div>
                            <div><a href="#"><?php echo the_author_meta( 'user_nicename' ,$post->post_author );  ?></a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span><?php echo get_comments_number($post->ID ) ;?></a></div>
                        </div>
                        <div class="desc pl-3">
                            <h3 class="heading"><a href="#"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>
        <?php wp_reset_postdata(); ?>
            <!-- <div class="col-md-4 ">
                <div class="blog-entry" data-aos-delay="100">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text d-flex py-4">
                        <div class="meta mb-3">
                            <div><a href="#">Sep. 20, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <div class="desc pl-3">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="blog-entry" data-aos-delay="200">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text d-flex py-4">
                        <div class="meta mb-3">
                            <div><a href="#">Sep. 20, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <div class="desc pl-3">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="ftco-quote">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                <div class="heading-section heading-section-white mb-5 ">
                    <h2 class="mb-2"><?php echo get_theme_mod( 'mh_contact_header','DentaCare Procedure & High Quality Services'); ?></h2>
                </div>
                <div class="">
                    <p><?php echo get_theme_mod( 'mh_contact_discription','Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Because there were thousands of bad Commas, wild Question Marks and devious Semikoli'); ?></p>
                    <ul class="un-styled my-5">
                        <li><span class="icon-check"></span><?php echo get_theme_mod( 'mh_sub1point_contact','DentaCare Procedure & High Quality Services'); ?></li>
                        <li><span class="icon-check"></span><?php echo get_theme_mod( 'mh_sub2point_contact','Adipisci repellat accusamus'); ?></li>
                        <li><span class="icon-check"></span><?php echo get_theme_mod( 'mh_sub3point_contact','Consectetur adipisicing elit'); ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 py-5 pl-md-5">
                <div class="heading-section mb-5 ">
                    <h2 class="mb-2">Get a Free Quote</h2>
                </div>
                <form action="#" class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Get a Quote" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <div id="map"></div> -->
<?php
get_footer();
?>