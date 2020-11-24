<?php
/**
 * Template Name: trainee Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<main id="site-content" role="main">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./wp-content/themes/child-twentytwenty/assets/img/slide_02.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./wp-content/themes/child-twentytwenty/assets/img/slide_02.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./wp-content/themes/child-twentytwenty/assets/img/slide_02.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./wp-content/themes/child-twentytwenty/assets/img/slide_02.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./wp-content/themes/child-twentytwenty/assets/img/slide_02.jpg" alt=""></div>            
        </div>
            
       
  </div>

  <div id="shoe-col4"  class="shoe-container">
    <div class="shoe">
        <div class="row">
            <div class="col-3">
                <div class="shoe-img">
                    <img src="./wp-content/themes/child-twentytwenty/assets/img/boot_03.jpg"alt="" >
                </div>
                <div class="shoe-text">
                    <p>Sko</p>
                </div>               
            </div>
            <div class="col-3">
                <div class="shoe-img">
                    <img src="./wp-content/themes/child-twentytwenty/assets/img/boot_05.jpg"alt="" >
                </div>
                <div class="shoe-text">
                    <p>Støvler</p>
                </div>                
            </div>
            <div class="col-3">
                <div class="shoe-img">
                    <img src="./wp-content/themes/child-twentytwenty/assets/img/boot_07.jpg"alt="" >
                </div>
                <div class="shoe-text">
                    <p>Gummistøver</p>
                </div>                
            </div>
            <div class="col-3">
                <div class="shoe-img">
                    <img src="./wp-content/themes/child-twentytwenty/assets/img/boot_10.jpg"alt="" >
                </div>
                <div class="shoe-text">
                    <p>Hjemmesko</p>
                </div>                
            </div>
        </div>
    </div>
  </div>

  <div class="child-container">
      <div class="row">
          <div class="col-6">
              <div class="child-img">
                <img src="./wp-content/themes/child-twentytwenty/assets/img/child_02.jpg"alt="" >
              </div>
              <div class="child-text">
                  <p>Find den rette størrelse</p>
              </div>
          </div>
          <div class="col-6">
              <div class="child-img">
                <img src="./wp-content/themes/child-twentytwenty/assets/img/boot_04.jpg"alt="" >
              </div>
              <div class="child-text">
                  <p></p>
              </div>
          </div>
      </div>
  </div>

</main><!-- #site-content -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
		var swiper = new Swiper('.swiper-container');
    </script>
    

<?php get_footer(); ?>
