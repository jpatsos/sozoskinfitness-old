<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @subpackage Patsos
 */

get_header(); ?>
<main class="content wrap" itemtype="http://schema.org/Article">
	<div class="row">
		<div class="well cell">
			<div class="g">
				<div class="g-b g-b--m--3of4">
					<div class="article-cover">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<?php else :
						$image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
						<?php endif; ?>
						<div style="height: 100%;">
							<meta itemprop="image" content='<?php echo $image[0]; ?>'></meta>
							<div class="article-cover-inner" style="background-image: url('<?php echo $image[0]; ?>')">
								<div class="article-cover-shade"></div>
							</div>
						</div>

						
					</div>

					<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', get_post_format() );
					?>

					<hr class="well--l">

					<p class="well--l"> 
						<strong>Did you like this article? Share it on <a onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600'); ga('send', 'event', 'Post Bottom', 'Click', 'Twitter');return false;" rel="nofollow" class="btn btn--twitter btn--xs" href="http://twitter.com/home?status=<?php echo urlencode("Currently reading: "); ?><?php the_permalink(); ?>" title="Share this article with your Twitter followers">Twitter</a> or <a onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600'); ga('send', 'event', 'Post Bottom', 'Click', 'Facebook');return false;" rel="nofollow" class="btn btn--facebook btn--xs" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this post on Facebook">Facebook</a></strong> 
					</p>

					<?php echo do_shortcode('[fbcomments url="' . get_permalink() .'" width="100%" count="off" num="3" countmsg="wonderful comments!"]'); ?>

					
				</div> <!-- 3of4 -->
				<div class="g-b g-b--m--1of4 sidebar">
					<?php include('includes/sidebar.php'); ?>
				</div>
			</div> <!-- g -->

		</div> <!-- well cell -->
	</div>
	<div class="row--a">
		<?php 

		function custom_nav(){
			$navigation = '';
			$previous   = get_previous_post_link( '<div class="nav-previous" onclick="ga(\'send\', \'event\', \'Post Bottom Pagination\', \'Click\', \'Previous\');">%link</div>', '<span>Previous Article:</span>%title', true );
			$next       = get_next_post_link( '<div class="nav-next" onclick="ga(\'send\', \'event\', \'Post Bottom Pagination\', \'Click\', \'Next\');">%link</div>', '<span>Next Article:</span>%title', true );

			// Only add markup if there's somewhere to navigate to.
			if ( $previous && $next ) {
				$navigation = _navigation_markup( $previous . $next, 'post-navigation-half' );
			} elseif (!$next){
				$navigation = _navigation_markup( $previous, 'post-navigation-full' );
			}

			echo $navigation;
		}

		custom_nav();

		// if(get_next_post_link()) {
		// 	custom_nav( array(
		// 		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Article') . '</span> ' .
		// 		'<span class="post-title">%title</span>',

		// 		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Article' ) . '</span> ' .
		// 		'<span class="post-title">%title</span>',
		// 	) );
		// }else {
		// 	custom_nav( array(
		// 		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Article' ) . '</span> ' .
		// 		'<span class="post-title">%title</span>',
		// 	) );
		// }
			
		// Previous/next post navigation.
		

		// End the loop.
		endwhile; 

		?>
	</div>
</main>

<?php get_footer(); ?>