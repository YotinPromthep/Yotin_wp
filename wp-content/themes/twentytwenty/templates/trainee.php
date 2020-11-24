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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


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
                    <a href="#"><img src="./wp-content/themes/child-twentytwenty/assets/img/boot_03.jpg"alt="" ></a>
                </div>
                <div class="shoe-text">
                    <span>Sko</span>
                </div>               
            </div>
            <div class="col-3">
                <div class="shoe-img">
                    <a href="#"><img src="./wp-content/themes/child-twentytwenty/assets/img/boot_05.jpg"alt="" ></a>
                </div>
                <div class="shoe-text">
                    <span>Støvler</span>
                </div>                
            </div>
            <div class="col-3">
                <div class="shoe-img">
                    <a href="#"><img src="./wp-content/themes/child-twentytwenty/assets/img/boot_07.jpg"alt="" ></a>
                </div>
                <div class="shoe-text">
                    <span>Gummistøver</span>
                </div>                
            </div>
            <div class="col-3">
                <div class="shoe-img">
                    <a href="#"><img src="./wp-content/themes/child-twentytwenty/assets/img/boot_10.jpg"alt="" ></a>
                </div>
                <div class="shoe-text">
                    <span>Hjemmesko</span>
                </div>                
            </div>
        </div>
    </div>
  </div>

  <div id="child-img" class="child-container">
      <div class="row">
          <div class="col-6">
              <div class="child-img">
                <img src="./wp-content/themes/child-twentytwenty/assets/img/child_02.jpg"alt="" >
              </div>
              <div class="child-text">
                  <span>Find den rette</span> <br>
                  <span>størrelse</span>
              </div>
          </div>
          <div class="col-6">
              <div class="child-img">
                <img src="./wp-content/themes/child-twentytwenty/assets/img/child_04.jpg"alt="" >
              </div>
              <div class="child-text">
                  <span>De første</span> <br>
                  <span>skridt</span>
              </div>
          </div>
      </div>
  </div>

  <div class="social-container" id="social">
      <div class="row">
          <div class="text-bundgaard">
              <span>#bundgaard</span>
          </div>
          <div class="icon-social">
              <div class="icon-facebook"><i class="fab fa-facebook"></i></div>
              <div class="icon-mail"><i class="fab fa-mail"></i></div>
              <div class="icon-instargram"><i class="fab fa-instargram"></i></div>
          </div>          
      </div>
      <div class="row">
        <div class="gallery">
            <div class="col-3"><a href="#"><img src="" alt=""></a></div>
            <div class="col-3"><a href="#"><img src="" alt=""></a></div>
            <div class="col-3"><a href="#"><img src="" alt=""></a></div>
            <div class="col-3"><a href="#"><img src="" alt=""></a></div>
        </div>
      </div>
  </div>

</main><!-- #site-content -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
		var swiper = new Swiper('.swiper-container');
    </script>
    

<?php get_footer(); ?>
