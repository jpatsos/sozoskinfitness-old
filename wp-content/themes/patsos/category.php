<?php get_header(); ?>

<main class="content">
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
						
						    <div class="tile tile--article mbm">
						    	<a href="<?php the_permalink(); ?>" class="tile-inner">
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
			    		    				<time class="tile-time" datetime="2015-06-04 14:26:00 UTC"><?php the_date(get_option('date_format')); ?></time>
			    		    				<h2 class="mtf tsxl twb"><?php the_title(); ?></h2>
			    		    				<?php the_excerpt(); ?>
			    		    			</div>
							    		
						    		</article>
						    		<div class="tile-anchor bucket bucket--flag">
						    			<img class="thumb mlf mrm" height="30" width="30" src="<?php echo get_user_meta($post->post_author, 'gravatar', true) ?>" alt="">
						    			<span><?php the_author_link(); ?></span>
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
					<div class="connect">
						<span href="" class="tac connect-header">Connect With <img class="connect-logo" src="/wp-content/themes/patsos/img/logo.png" alt="Skip's"></span>
						<a href="" class="connect-item facebook"><i class="icon-facebook"></i>Like Us On Facebook</a>
						<a href="" class="connect-item twitter"><i class="icon-twitter"></i>Follow Us On Twitter</a>
						<a href="" class="connect-item pinterest"><i class="icon-pinterest"></i>Follow Us On Pinterest</a>
						<a href="" class="connect-item instagram"><i class="icon-instagram"></i>Follow Us On Instagram</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</main>

<?php get_footer(); ?>