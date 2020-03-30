<?php get_header(); ?>

<div> <?php echo do_shortcode('[smartslider3 slider=2]');?> </div>
    <div class="container-fluid col-md-12 col-sm-12 col-xs-12 nopadding">
    <!-- <div class="container section-img">
      
    </div> -->
    <div class="container section-img" style="margin: 0px;width: -webkit-fill-available;padding-top: 40px;">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="firstimg">
          <img class="col-md-12 col-sm-12 col-xs-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="Receta de la semana" height="288">
        </div>
        <div class="secondimg">
          <img class="col-md-12 col-sm-12 col-xs-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="Receta de la semana" height="351">
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="text-img">
          <div>
            <p>Conoce la vida de</p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/text1.png">
            <span>UNA Berry</span>
            <span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/text2.png"></span>

          </div>

        </div>
        <div class="videodivone">
          <div class="backimg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.png" alt="Receta de la semana" class="back-img"> </div>
          <div class="frontimg">
        <?php echo do_shortcode('[embedyt]https://www.youtube.com/watch?v=B4yV3AO7G6E&width=400&height=330[/embedyt]'); ?>
            <!-- <img src="images/framruesa.png" class="front-img" alt="Receta de la semana" ></div> -->
          </div>

        </div>
      </div>
      <center class="centerdiv">
        <div class=" midsection">

          <div class="centered">
            <p>CALENDARIO</p>
            <p>NUESTRO CULTIVO DE BAYAS</p>
            <p>REGIONES</p>
          </div>
        </div>
      </center>

    </div>
    <div class="container section-img" style="margin: 0px;width: -webkit-fill-available;">
      <div class="sectionenddiv">
        <p style="color: rgb(235, 71, 49);">#DulzuraNatural</p>
        <p style="color: rgb(74,119,60);">Compartenos tu experiencia berry-ciosa</p>

      </div>
      <div class="image-slider">
        <div class="div-pos col-md-3 col-sm-12 col-xs-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide1.png"></div>
        <div class="div-pos col-md-3 col-sm-12 col-xs-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide2.png"></div>
        <div class="div-pos col-md-3 col-sm-12 col-xs-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide3.png"></div>
        <div class="div-pos col-md-3 col-sm-12 col-xs-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide4.png"></div>
      </div>

      <center> <button class="vermas" type="button" style="margin-top: 30px;margin-bottom: 30px;"> VER MAS &gt;
        </button> </center>


    </div>

  </div>
  <?php get_footer();

?>