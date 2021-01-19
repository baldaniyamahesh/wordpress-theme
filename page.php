<?php
/* Template Name:Blog Template */
get_header();
?>


<section class="home-slider owl-carousel">
    <?php $imgurl = get_the_post_thumbnail_url(get_the_ID('full')); ?>
 
      <div class="slider-item bread-item" style="background-image: url('<?php echo $imgurl ?>');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
            
         <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12  mb-5">
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}"> <?php  the_title( ); ?></h1>
            </div>
          </div>
        </div>
      </div>
</section>


</body>
<?php
get_footer( );
?>

</html>