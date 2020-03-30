<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
   <header>
    <div class="menu-left" style="z-index: 1;">
      <div class="col-md-12 col-sm-12 ">
        <img class="leftmenuimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/leftmenu1.png" alt="Receta de la semana">
      </div>
      <div class="col-md-12 col-sm-12 ">
        <img class="leftmenuimg"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/leftmenu2.png" alt="Conoce tu Berry ideal">
      </div>
      <div class="col-md-12 col-sm-12 ">
        <img class="leftmenuimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/leftmenu3.png" alt="La vida de una Berry">
      </div>
      <div class="col-md-12 col-sm-12 ">
        <img class="leftmenuimg"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/leftmenu4.png" alt="Donde Crecemos">
      </div>
    </div>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo site_url()?>" class="navbar-brand navlia"> <img src="https://driscolls.imgix.net/images/logo.png"
            alt="Driscoll&#39;s Only the Finest Berries" style="height: inherit;"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a  class="navlia" href="<?php echo site_url('/about-us')?>"> <img class="navimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/topmenu1.png"
                alt="LA dulzura natural de neustras berries"></a></li>
          <li> <a class="navlia" href="#"><img class="navimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/topmenu2.png"
                alt="Familia Driscoll's(el arte de cultivar)"></a> </li>
          <li> <a class="navlia" href="#"><img class="navimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/topmenu3.png" alt="Recetas"></a> </li>
          <li> <a class="navlia" href="#"><img class="navimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/topmenu4.png" alt="Berrynews"></a> </li>
          <li> <a class="navlia" href="#"><img class="navimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/topmenu5.png" alt="Contacto"></a> </li>
        </ul>
      </div>


    </div>

  </header>