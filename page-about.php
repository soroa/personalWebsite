<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<div class="page_container">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
			<h1 class="page_title"><?php the_title() ;?></h1>
			<div id="page_content"> <?php  the_content(); ?></div>
		
		<?php 

				endwhile;
		?>
	</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
