<?php
get_header(); ?>



		
		<div class="wide_page_container">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
			<h1 class="page_title"><?php the_title() ;?></h1>
			<div id="page_content"> <?php  the_content(); ?></div>

		<?php 

				endwhile;
		?>

	<section class="postsGrid">
		 <?php $the_query = new WP_Query('post_type=post');
            if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post();
     ?> 
      <a href='<?php the_permalink(); ?>' class="thumbnail"  >
				  	 <img id="thumbnail_img"src="<?php the_post_thumbnail_url(); ?>"/>
				    	<div id=thumbnail_caption>
			
					    	<h4 id="blog_thumb_title"><?php the_title(); ?></h4>
					    	<p id="blog_thumb_date"><?php the_date(); ?></p>
				    	</div>

	 </a>


		<?php endwhile; ?>

 		<?php endif; ?>
	</section>

	</div>


<?php get_footer(); ?>
