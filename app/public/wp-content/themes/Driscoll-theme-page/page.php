<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
<div> <?php echo do_shortcode('[smartslider3 slider=3]');?></div>

  <div class="container-fluid col-md-12 col-sm-12 nopadding">

    <div class="container col-md-12 col-sm-12 strawberryImg">
      <div class="col-md-12 col-sm-12">
        <p class="fresatext" style="font-size: 15vw;"> Fresa</p>
        <!-- <img src="images/strawberry.png" alt="strawberry">  -->
      </div>

      <div class="col-md-4 col-sm-4 straw-text">
        <p style="color:  rgb(74,119,60);">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

        </p>
      </div>
      <div class="row col-md-6 fresadiv">
        <p class="sm_align" style="color: rgb(74,119,60);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class="container section-img tipsimg">
      <div>
        <p class="tips-font"> Tips & Cuidados</p>
        <p class="pasos"> 4 pasos para mantener tus fresas brillantes y jugosas : </p>
      </div>
      <div class="image-slider">
        <div class="div-pos col-md-3 col-sm-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/TIP1.png">
          <p>Paso 1 :"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua </p>
        </div>
        <div class="div-pos col-md-3 col-sm-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/TIP2.png">
          <p>Paso 2 :"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua </p>
        </div>
        <div class="div-pos col-md-3 col-sm-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/TIP3.png">
          <p>Paso 3 :"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua </p>
        </div>
        <div class="div-pos col-md-3 col-sm-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/TIP4.png">
          <p>Paso 4 :"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua </p>
        </div>
      </div>
    </div>

    <!-- video-->
    <div class="container section-img" style="margin: 0px;width: -webkit-fill-available;">
      <div class="col-md-4  col-sm-4 video-style">
        <p>Mirar</p>
        <p>Video</p>
      </div>
      <div class="col-md-6 col-sm-6" style="padding-top: 54px;">
     <?php echo do_shortcode('[embedyt]https://www.youtube.com/watch?v=B4yV3AO7G6E&width=400&height=330[/embedyt]'); ?></div>
    </div>
    <div class="container section-img" style="margin: 0px;width: -webkit-fill-available;">
      <div style="float: left; margin-top: 0px;float: left;
            margin-top: 0px;
            width: inherit;">
        <p><span class="strawberryimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fresa.png" style="height: 300px;"></span>
          <p style="font-family:cursive;color: rgb(74,119,60);font-style: italic; font-size: 5rem;">Benefious y Valores
          </p>
          <p style="font-weight: lighter;font-style: italic;font-family: cursive;color: green;font-size: 4rem;">
            Nutritionales</p>
          <p style="font-family:cursive; font-size: 5rem;color: rgb(235, 71, 49);">de la FRESA</p>
          <p> - Content 1 : <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam,</span></p>
          <p> - Content 2 : <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam,</span></p>
          <p> - Content 3 : <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam,</span></p>
          <p> - Content 4: <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam,</span></p>
        </p>
      </div>



    </div>

    <div class="container section-img" style="margin: 0px;width: -webkit-fill-available;padding-top: 40px;">

      <center>
        <div style="background: #fff; width: fit-content; border-radius: 5px;border: 5px solid green;">
          <div style="border-bottom: 5px solid green;
            text-align: initial; padding: 10px; ">
            <div>addsasd</div>adsads asd
          </div>
          <table>
            <tr>
              <td>Teddy Bears</td>
              <td>50,000</td>
              <td>30,000</td>
            </tr>
            <tr>
              <td>Board Games</td>
              <td>10,000</td>
              <td>5,000</td>
            </tr>
            <tr>
              <td>Board Games</td>
              <td>10,000</td>
              <td>5,000</td>
            </tr>
            <tr>
              <td>Board Games</td>
              <td>10,000</td>
              <td>5,000</td>
            </tr>
            <tr>
              <td>Board Games</td>
              <td>10,000</td>
              <td>5,000</td>
            </tr>
            <tr>
              <td>Board Games</td>
              <td>10,000</td>
              <td>5,000</td>
            </tr>
            <tr>
              <td>Board Games</td>
              <td>10,000</td>
              <td>5,000</td>
            </tr>
          </table>
        </div>
      </center>
      <div class="sectionenddiv">

        <p style="color: rgb(74,119,60);">iCrea platillos Berri-ciosis!</p>

      </div>

      <center> <button class="vermas" type="button" style="margin-top: 30px;margin-bottom: 30px;"> VER MAS &gt;
        </button> </center>



    </div>
    <div class="container section-img" style="margin: 0px;width: -webkit-fill-available;">
      <div class="sectionenddiv">
        <p style="color: rgb(235, 71, 49);">#DulzuraNatural</p>
        <p style="color: rgb(74,119,60);">Compartenos tu experiencia berry-ciosa</p>

      </div>
      <div class="image-slider">
        <div class="div-pos col-md-3 col-sm-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide1.png"></div>
        <div class="div-pos col-md-3 col-sm-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide2.png"></div>
        <div class="div-pos col-md-3 col-sm-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide3.png"></div>
        <div class="div-pos col-md-3 col-sm-12"><img class="img-size col-sm-12" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide4.png"></div>
      </div>

      <center> <button class="vermas" type="button" style="margin-top: 30px;margin-bottom: 30px;"> VER MAS &gt;
        </button> </center>


    </div>

  </div>

  <?php }

  get_footer();

?>