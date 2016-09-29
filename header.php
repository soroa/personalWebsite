<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> <?php bloginfo('name'); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/page_style.css">
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/single_style.css">

  <!-- Custom Fonts -->
 
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

    <script src="<?php bloginfo('template_url'); ?>/jquery-2.2.2.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/main.js"></script>

      <script src="<?php bloginfo('template_url'); ?>/transitions.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/filter.js"></script>
    
    <?php wp_head(); ?>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main" style="background-color: #<?php background_color(); ?>">

  <nav class = "scroll">
    
     <a class="logo" href="<?php echo home_url()?>">
    <img  src="<?php bloginfo('template_url'); ?>/assets/img/logo2.png" alt="">
    </a>





    <ul>
    <?php $the_query = new WP_Query('post_type=page&orderby=id&order=asc&post_parent=0');
            if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post();
     ?> 
      <li> 
           <div  style="text-transform:uppercase"><a href="<?php the_permalink(); ?>"> <?php the_title() ?> </a>
         
           <?php 
             $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => $post->ID,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
             );


            $parent = new WP_Query( $args );
            if ( $parent->have_posts() ) : ?>

             <div class="dropdown-content">

               <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

             <?php endwhile; ?>

            <?php endif; wp_reset_query(); ?>
        


          </div>

           </div>
              
     </li>

     <?php endwhile; 

              endif;
              wp_reset_query(); ?>

    </ul>
    <div class="socials">
    <a href="<?php  echo get_option("InstagramProfile") ?>"><img class="social-logo" src="<?php bloginfo('template_url'); ?>/assets/img/instagram-icon.png"> </a>
            <a href="<?php  echo get_option("FacebookProfile")?>"><img  class="social-logo" src="<?php bloginfo('template_url'); ?>/assets/img/fb-icon.png"> </a>
            <a href="<?php  echo get_option("GithubProfile")?>"><img  class="social-logo" src="<?php bloginfo('template_url'); ?>/assets/img/github-icon.png"> </a>
    </div>
    </nav>   
      


