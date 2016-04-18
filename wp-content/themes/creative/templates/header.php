



<header class="banner">
  <div class="container">

<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-4" id="logo">

    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="ibm logo">

    </a>

  </div>       

     

  <div class="col-md-8 col-sm-8 col-xs-8">
    

   <nav class="navigation" id="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>


  </div>

</div><!-- end div row -->

 
  </div><!-- end container -->



</header>

<div class="slider">

<?php 
    echo do_shortcode("[metaslider id=7]"); 
?>

</div>



