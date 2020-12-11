<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>


<html class="no-js" <?php language_attributes(); ?>>


	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

		

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">
			<div class="header-inner section-inner top-menu">
				<div class="text-menu-top">
					<div class="col-4">
						<div class="text-menu">
							<h1>SOMMERUDSALG - <span>SPAR 30%</span> PÅ HUNDREDVIS AF STYLES</h1>
						</div>
					</div>
					<div class="col-8">
						<div class="logo-service">
							<div class="top-service">
								<div class="img-service">
									<img src="wp-content/themes/child-twentytwenty/assets/img/logo-service_06.png" alt="">
								</div>
								<div class="text-top-service">
									<span class="h">Gratis levering</span>
									<span class="c">Ved ordre over 500 kr.</span>
								</div>
							</div>
							<div class="top-service">
								<div class="img-service middle">
									<img src="wp-content/themes/child-twentytwenty/assets/img/logo-service_09.png" alt="">
								</div>
								<div class="text-top-service">
									<span class="h">1-2 dages levering </span>
									<span class="c">Lyn hurtig levering</span>
								</div>
							</div>
							<div class="top-service">
								<div class="img-service">
									<img src="wp-content/themes/child-twentytwenty/assets/img/logo-service_03.png" alt="">
								</div>
								<div class="text-top-service">
									<span class="h">14 dages returret </span>
									<span class="c">Tilfreds eller pengene tilbage</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-inner section-inner ">

				<div class="header-titles-wrapper">					

					<div class="header-titles">

						<a href="http://localhost/Yotin_wp/"><img src="wp-content/themes/child-twentytwenty/assets/img/logo-web_03.png" alt="" srcset=""></a>
						
					</div><!-- .header-titles -->

			</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper mid">
					<div class="col-1">
						<span class="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
					</div>
					<div class="col-11 menu-midle">
						<div class="search">
							<a href="#" id="main-search" ><i class="fa fa-search"></i></a>
							<input id="show-search" type="text">
						</div>
						<div class="dropdown">
							<button id="drop-show" class="dropbtn">Danish <i class="fa fa-caret-down"></i></button>
							<div id="drop" class="dropdown-content">
								<a id="Danish" href="#" >Danish</a>
								<a id="German" href="#" >German</a>
								<a id="English" href="#" >English</a>
							</div>
						</div>
						<div class="user">
							<div class="logo-user">
								<a href="#"><i class="fa fa-user"></i></a>
							</div>
							<div class="name-user">
								<a href="#"><span>Min konto  </span></a>
							</div>
						</div>
						<div class="log-in">
							<div class="logo-login">
								<a href="#"><i class="fa fa-sign-in"></i></a>
							</div>
							<div class="text-login">
								<a href="#"><span>Log ind</span></a>
							</div>
						</div>
						<div class="user-login-respon">
							<div class="dropdown">
								<button class="dropbtn"><a href="#"><i class="fa fa-user"></i></a><span class="dis"> Min konto </span><i class="fa fa-caret-down"></i></button>
								<div class="dropdown-content">
									<a  href="#" ><i class="fa fa-sign-in"></i><span class="dis"> Log ind</span></a>
								</div>
							</div>
						</div>
						<div class="cart">
							<div class="logo-cart">
								<a href="#"><i class="fa fa-shopping-cart"></i></a>
							</div>
							<div class="text-cart">
								<a href="#"><span>Indkøbtskur</span></a>
							</div>
							<div class="number-cart">
								<a href="#"><span class="shop">(0)</span></a>
							</div>
						</div>
					</div>
					

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->
			<?php
				$li = array("red","green","blue","yellow");					
			?>
			<div  class="header-inner section-inner ham" >
				<div class="menu-bottom ">
					<div class="menu-text">						
					<ul>
						<li class="hov"><a href="#"> Sko</a>						
							<ul class="show-nav">	
							<?php foreach ($li as $value){ ?>

								<li><?php echo "$value"; ?></li>
								
								<?php } ?>
							</ul>
						
						</li>
						<li><a href="#"> Støvler</a></li>
						<li><a href="#"> Gummistøvler</a></li>
						<li><a href="#"> Hjemmesko</a></li>
						<li><a href="#"> De første skridt</a></li>
						<li><a href="#"> Find størrelse</a></li>
						<li><a href="#"> Pleje af sko</a></li>
						<li><a href="#"> Kundeservice</a></li>
						<li class="last"><a href="#"> Om Bundgaard</a></li>
					</ul>
					</div>
				</div>
				
			</div>

			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="#"><span>Sko</span></a>
				<a href="#"><span>Støvler</span></a>
				<a href="#"><span>Gummistøvler</span></a>
				<a href="#"><span>Hjemmesko</span></a>
				<a href="#"><span>De første skridt</span></a>
				<a href="#"><span>Find størrelse</span></a>
				<a href="#"><span>Pleje af sko</span></a>
				<a href="#"><span>Kundeservice</span></a>
				<a href="#"><span>Om Bundgaard</span></a>
			</div>
			
			
		
			
			
					
			
	
					
		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
