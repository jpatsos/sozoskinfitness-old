

 <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 	<div class="post">

 	<?php
		$category = get_the_category();
		$cat_name = $category[0]->name;
		$cat_slug = $category[0]->slug;
	?>

	<figure class="tile-media">
		<?php if (has_post_thumbnail()): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php else :
		$image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
		<?php endif; ?>
		<div class="tile-media-inner" style="background-image: url('<?php echo $image[0]; ?>')">
			<div class="tile-media-shade <?php echo $cat_slug; ?>"></div>
		</div>
	</figure>

 	<!-- Display the Title as a link to the Post's permalink. -->

 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


 	<!-- Display the Post's content in a div box. -->

 	<div class="entry">
 		<?php 
		  $content = get_the_content(); 
		  echo substr(strip_tags($content), 0, 150) . '&hellip;'; 
		?>
 	</div>


 	<!-- Display a comma separated list of the Post's Categories. -->

 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
 	</div> <!-- closes the first div box -->


 	<!-- Stop The Loop (but note the "else:" - see next line). -->
 

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>


