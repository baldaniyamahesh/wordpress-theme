<?php

?>
<style>
@media (max-width: 991.98px){
 .ftco-navbar-light{
	background:<?php echo get_theme_mod('mh_nav_bg_color1','#000')?>!important;

 }
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo get_bloginfo() ?> || <?php the_title( )  ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head() ?>
    
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="">Denta<span>Care</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
			<?php
		wp_nav_menu( array( 
		'theme_location'=>'primary',
		'menu_class' =>'navbar-nav',
		'menu_id' => 'nav',
		'wp_nav_menu_items' => 'nav-item',
		'add_li_class'  => 'nav-item'
		) ); 
      ?>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
