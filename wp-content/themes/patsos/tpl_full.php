<?php
/*
Template Name: Full
*/
?>

<?php get_header(); ?>
	
<main class="content wrap">
    <div class="row">
    	<div class="cell well">
	 
		    <?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

			// End the loop.
			endwhile;
			?>
		</div>
    </div>
    
</main>

<?php get_footer(); ?>