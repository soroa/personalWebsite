
	<?php get_header(); ?>

  	<!-- ==== /MENU ==== -->
	<!-- ==== HEADER ==== -->
    <section class="web" >

			<header class="cd-fixed-bg barca">
		  		
				<h1 id="cover-caption">
		            <?php bloginfo('description'); ?>
				</h1>
				<span class="black-filter"></span>

		  	</header>	    


<!--
    
    <div id="hr_header">
        <hr>
    </div>
-->
  
	<!-- ==== ABOUT ==== -->
	<section class ="sectionPadding cd-scrolling-bg  " id="about" >
		
            <header>
			<h1 class="sectionTitle" >About</h1>
            </header>
			<hr>
			<section>
				
				<article class="about-summary slideInLeft">
						<div class="about-summary">
						<p>ETH Student currently doing his Masters.

							I think I’ve had a plain old bucket list in the form of a Facebook Note ever since I was in high school. However, I never got around to anything on the list – ebsite isn’t static; it’s dynamic. It’s ever-changing. The moment you accomplish something, you can add it to your website. You don’t need to print new copies of it and send it out to your contacts over and over; you just update it. People can continually come back and see what you’re up to.

						</p>
						</div>

						<div id="about-more">

						<?php $mypage = get_page_by_path( 'about' );	
							$mypageid = ( $mypage ? $mypage->ID : '0' );
						             $args = array(
						                'post_type'      => 'page',
						                'post_parent'    => $mypage->ID,
						                'order'          => 'ASC',
						                'orderby'        => 'menu_order'
						             );


						            $parent = new WP_Query( $args );
						            if ( $parent->have_posts() ) : 

						while ( $parent->have_posts() ) : $parent->the_post();
						 ?>

 	 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

             <?php endwhile; ?>

            <?php endif; wp_reset_query(); ?>

						</div>
						<div class="socials">
						<a href="<?php  echo get_option("InstagramProfile") ?>"><img class="social-logo" src="<?php bloginfo('template_url'); ?>/assets/img/instagram-icon.png"> </a>
						<a href="<?php  echo get_option("FacebookProfile")?>"><img  class="social-logo" src="<?php bloginfo('template_url'); ?>/assets/img/fb-icon.png"> </a>
						<a href="<?php  echo get_option("GithubProfile")?>"><img  class="social-logo" src="<?php bloginfo('template_url'); ?>/assets/img/github-icon.png"> </a>
					</div>
					
				</article>	

            	<img class = "slideInRight" src="<?php bloginfo('template_url'); ?>/assets/img/cv.png"> 

				
			</section>
            		


	</section>

	<section class="cd-fixed-bg eth">
			<h1 class="light-black-bg">ETH Zürich</h1>
			<span class="black-filter"></span>

	</section>
		
	    <!-- ==== Quote ==== -->

		<!-- The impediment to action advance action. What stands in the way becomes the way. Marcus Aurelius -->



	    <!-- ==== BLOG ==== -->
	<section id="blog" class="cd-scrolling-bg" >
		
		<section>
			<header >
				<br>
				<h1 class="sectionTitle" >MY  PERSONAL BLOG</h1>
				<hr>
				<br>
			</header>


			<section id="blog_thumbnails">

				<?php   
					$args1 = array(
				    'posts_per_page' => 4,
				    'orderby'        => 'most_recent',
				    'offset'         => 0,
					);

				  $the_query_latest= new WP_Query( $args1 );

				  

			       ?>
				<?php if ( have_posts() ) : while ( $the_query_latest->have_posts() ) : $the_query_latest->the_post(); ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

				    <a href= '<?php the_permalink(); ?>' class="thumbnail" >
				  	 <img id="thumbnail_img" src="<?php the_post_thumbnail_url(); ?>"/>
				    	<div id=thumbnail_caption>
			
					    	<h4 id="blog_thumb_title"><?php the_title(); ?></h4>
					    	<p id="blog_thumb_date"><?php the_date(); ?></p>
				    	</div>

					 </a>
				<?php endwhile; ?>
				<?php endif ;
				wp_reset_query();?>




			</section> 
		</section>
	</section>



	

	
 	<section class=' cd-fixed-bg books-bg' >
 	<span class="black-filter"></span>
 	<div class="reads">
 		<header class="">
 			<h1 class=" light-black-bg slideInLeft">Currently Reading</h1>
 		</header>
 		
		<div class="bookcover  slideInBottom">
			
		</div>
		<div class="bookinfo light-black-bg slideInRight">
			<h3><strong>Author:</strong> Ryan Holiday</h3>
			<h3><strong>Title:</strong> The obstacle is the way</h3>
			<h3><strong>Started:</strong>September '16</h3>
		</div>
 		
	</div>



 	</section>
		
		<!-- ==== SECTION DIVIDER ==== -->
     <section class="zurich cd-fixed-bg " >
     	<div class="slideInLeft">

        
         <header >
				<h1 class="light-black-bg">Living in Zürich</h1>
				<hr>
         </header>
         
         <footer>
				<p><a  href="#"></a>  <a  href="#"></a></p>
        </footer>
        </div>
	         
     </section>

     	<?php get_footer(); ?>

		


