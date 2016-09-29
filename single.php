
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<section class=".cd-fixed-bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
			
		</section>

		<div class="single_page_container">
			<?php
			// Start the loop.

			while ( have_posts() ) : the_post();
			?>
				<section class=".cd-fixed-bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
			
		</section>
				 <img id="single_cover_image" src="<?php the_post_thumbnail_url(); ?>"/>
				<h1 id="single_title"><?php the_title() ;?></h1>
				<div id="single_content"> <?php  the_content(); ?></div>

			<?php 

					endwhile;
			?>


		</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
