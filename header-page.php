<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title> <?php bloginfo('name'); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <!-- Custom Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,400,500' rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Suez+One" rel="stylesheet">


    <script src="<?php bloginfo('template_url'); ?>/jquery-2.2.2.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/main.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/transitions.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/filter.js"></script>
    
    <?php wp_head(); ?>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main" style="background-color: #<?php background_color(); ?>">
  <!-- ==== MENU ==== -->

<!-- ==== MENU ==== -->
  <nav class = "scroll">
  <div class="logo">
  <img  src="<?php bloginfo('template_url'); ?>/assets/img/logo2.png" alt="">
  </div>
    <ul>



             <li>
                <div class="iconname"><a href="#about"> <h2> ABOUT ME</h2></a></div>
              
            </li>
               <li>
                <div class="iconname"><a href="#blog"> <h2>BLOG</h2></a></div>
                
            </li>
            <li>
                <div class="iconname"><a href="#reads"><h2> READING LIST </h2></a></div>
              
            </li>
                    <li>
             <?php  
              $the_query = new WP_Query('pagename=impossiblelist');

              if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
          
                <div class="iconname"><a href="<?php the_permalink(); ?>"><h2> MY IMPOSSIBLE LIST </h2></a></div>
                      <li>  

              <?php endwhile; 

              endif; ?>
           
          


            </li>

      
            <li>
                <div class="iconname"><a href="#reads"> <h2>CONTACT </h2></a></div>
             
            </li>
    </ul>
    </nav>   
      


