 <?php global $devripon; ?>
 <!DOCTYPE html>
 <html lang="<?php language_attributes()?>">

     <head>
         <meta charset=" <?php bloginfo('charset')?> " />
         <meta http-equiv=" X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <link rel="shortcut icon" href="<?php echo $devripon['fav_upload']['url'] ?>"
             type="image/x-icon" />
         <title><?php echo bloginfo('title') ?> |<?php echo bloginfo('description') ?> </title>
         <meta name=" description"
             content="Mukhles is a one-stop destination for all your resources need, be it tech tutorials, product reviews, or latest news updates.">
         <link rel="canonical" href="<?php echo site_url(); ?>">
         <meta property="og:title" content="<?php echo bloginfo('title') ?> |<?php echo bloginfo('description') ?>" />
         <meta property="og:type" content="website" />
         <meta property="og:url" content="<?php echo site_url(); ?>" />
         <meta property="og:image" content="https://mukhles.org/images/mukhles-logo.jpg" />
         <meta property="og:description"
             content="Mukhles is a one-stop destination for all your resources need, be it tech tutorials, product reviews, or latest news updates." />
         <meta name="robots" content="index,follow">
         <link rel="alternate" href="<?php echo site_url(); ?>/" hreflang="<?php echo language_attributes()?>" />
         <meta name="theme-color" content="#ffffff">
         <meta name="mobile-web-app-capable" content="yes">
         <meta name="apple-mobile-web-app-capable" content="yes">
         <meta name="apple-mobile-web-app-status-bar-style" content="black">
         <meta name="apple-mobile-web-app-title" content="Mukhles">
         <meta name="msapplication-TileColor" content="#ffffff">
         <meta name="msapplication-TileImage" content="https://mukhles.org/images/mukhles-logo.jpg">
         <meta name="msapplication-config" content="none">
         <?php wp_head() ?>
     </head <?php body_class() ?>>
     </head>


     <body>

         <?php if(is_front_page()):  ?>

         <section class="top-nav-section p-2" style="background: rgba(41, 189, 248, 0.219)">

             <div class=" container">
                 <div class="row">
                     <div class="col-12 col-sm-6 ">
                         <ul class="d-flex justify-content-center justify-content-sm-start ">
                             <li class="email"><a href="#"><i class="fa-solid fa-envelope"></i></a>
                             </li>
                             <li><span><?php echo $devripon['email'] ?></span></li>
                         </ul>
                     </div>
                     <div class="col-12 col-sm-6">
                         <ul class="d-flex justify-content-center justify-content-sm-end gap-3">
                             <li class="facebook"><a href="<?php echo $devripon['facebook'] ?>"><i class=" fa-brands
                                     fa-facebook-f"></i></a></li>
                             <li class="twitter"><a href="<?php echo $devripon['twitter'] ?>"><i
                                         class="fa-brands fa-twitter"></i></a></li>
                             <li class="linkedin"><a href="<?php echo $devripon['linkedin'] ?>"><i
                                         class="fa-brands fa-linkedin-in"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </section>
         <!-- main-slider-section -->
         <section class="main-slider">
             <div class="slider owl-carousel">
                 <?php
                     $slider =  new WP_Query([
                        'post_type' => 'slider',
                        'post_per_page' => 7,
                    ])  ?>
                 <?php if($slider->have_posts()):  ?>
                 <?php while($slider->have_posts()):$slider->the_post() ?>
                 <div class="slides">
                     <div class="slide-img">
                         <img
                             src="<?php the_post_thumbnail_url()  ?>"
                             alt="" />
                         <div class="overlay"></div>
                     </div>
                 </div>
                 <?php endwhile  ?>
                 <?php wp_reset_query()  ?>
                 <?php endif;  ?>



             </div>
         </section>
         <!-- main-slider-section -->

         <!-- Main Navigation Section -->
         <?php get_template_part( 'template-parts/navigation/navigation' );  ?>
         <!-- Main Navigation Section -->
         <?php else:  ?>
         <!-- Main Navigation Section -->
         <?php get_template_part( 'template-parts/navigation/navigation' );  ?>
         <!-- Main Navigation Section -->
         <!-- page bredcrumbs -->

         <?php get_template_part( 'template-parts/breadcrumbs/breadcrumbs' );  ?>
         <!-- page bredcrumbs -->
         <?php endif;  ?>