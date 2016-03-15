<?php
/*
Template Name: Blog
*/
	query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); 
?>

<?php get_header(); ?>

<main class="content wrap" itemprop="mainContentOfPage">
	<div class="row row--grey">
		<div class="well cell">
			<div class="g">
				<div class="g-b g-b--m--3of4">
					<h1 class="posts-title tfs ttu"><?php single_cat_title(); ?></h1>
				</div>
			</div>
			<div class="g">
				<div class="g-b g-b--m--3of4">
					<?php if (have_posts()) : ?>

					<div class="tiles">

						<?php while (have_posts()) : the_post(); ?>

							<?php
								$category = get_the_category();
								$cat_name = $category[0]->name;
								$cat_slug = $category[0]->slug;
							?>
						
						    <div class="tile tile--article tile--article--cover mbm">
						    	<a href="<?php the_permalink(); ?>" class="tile-inner" onclick="ga('send', 'event', 'Category Page: <?php single_cat_title(); ?>', 'Click', 'Post: <?php the_title(); ?>');">
						    		<div aria-hidden="true" class="tile-shade"></div> 
							    	<article class="tile-content">
			    		    			<figure class="tile-media">
			    		    				<?php if (has_post_thumbnail()): ?>
			    							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			    							<?php else :
			    							$image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
			    							<?php endif; ?>
			    							<div class="tile-media-inner" style="background-image: url('<?php echo $image[0]; ?>')">
			    								<div class="tile-media-shade"></div>
			    							</div>
			    		    			</figure>
			    		    			<div class="tile-content-inner">
				    		    			<span class="tile-time"><time datetime=""><?php echo mysql2date('F j, Y', $post->post_date); ?></time> <span class="post-cat tar fr"><?php echo $cat_name; ?></span></span>
			    		    				<h2 class="mtf tsxl twb"><?php the_title(); ?></h2>
			    		    				<?php //the_excerpt(); ?>
			    		    				<div class="mobile-hide">
				    		    				<?php 
				    		    				  $content = get_the_content(); 
				    		    				  echo substr(strip_tags($content), 0, 180) . '&hellip;' 
				    		    				?>
			    		    				</div>
			    		    			</div>
							    		
						    		</article>
						    		<div class="tile-anchor bucket bucket--flag">
						    			<img class="thumb mlf mrm" height="30" width="30" src="<?php echo get_user_meta($post->post_author, 'gravatar', true) ?>" alt="">
						    			<span><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></span>
						    		</div>
						    		<div class="tile-more">
						    			<span class="tile-anchor">
						    				Visit <strong>Article</strong>
						    				<i aria-hidden="true" class="material-icons md-24">&#xE315;</i>
						    			</span>
						    		</div>
						    	</a>
						    </div>
						
						<?php endwhile; ?>
						
						<?php else : ?>

						<article class="no-posts">

						    <h1>No posts were found.</h1>

						</article>
						
						<?php endif; ?>
					</div>
					<div class="well">
						<p class="article-nav-next pull-right"><?php previous_posts_link(__('Newer Posts »')); ?></p>
			                    
			            <p class="article-nav-prev pull-left"><?php next_posts_link(__('« Older Posts')); ?></p>
					</div>
				</div>
				<div class="g-b g-b--m--1of4 sidebar">
					<?php include('includes/sidebar.php'); ?>
				</div>
			</div>
		</div>
		
	</div>
	
</main>


<?php get_footer(); ?>